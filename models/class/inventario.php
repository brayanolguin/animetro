<?php

Class Inventario{
    public $idvolumen;
    public $titulo;
    public $volumen;
    public $serie;
    public $portada;
    public $precio;
    public $oferta;
    public $estadooferta;
    public $fechaing;
    public $diasoferta;
    public $horasoferta;
    public $minutosoferta;
    public $segundosoferta;
}


Class LstMangas{
    public $oproductos;
    public $oerror;
}

Class paginadorLibros{
    public $total;
    public $desde;
    public $hasta;
    public $paginas;
}

Class oPaginador{
    public $opaginador;
    public $oerror;
}

function productosDestacados($db){
    $items = [];
    try{
        $query = $db->query("SELECT DISTINCT(lib_volumen), lib_idlibro, fk_ser_idserie, li.*, ser.*, ofe.*,
                            (SELECT SUM(inv.inv_stock) FROM inventarios as inv WHERE inv.fk_lib_idlibro = lib_idlibro) AS stock
                            FROM libros AS li
                            LEFT JOIN inventarios as inv ON li.lib_idlibro = inv.fk_lib_idlibro 
                            LEFT JOIN series AS ser ON ser.ser_idserie = li.fk_ser_idserie 
                            LEFT JOIN ofertas AS ofe ON ofe.fk_lib_idlibro = li.lib_idlibro
                            ORDER BY li.lib_idlibro DESC 
                            LIMIT 12"
                            );

        while($row = $query->fetch()){
            $total = 0;
            $estadooferta = false;
            $item = new Inventario();
            $item->idvolumen =  $row['lib_idlibro'];
            $item->titulo =     $row['lib_titulo'];
            $item->volumen =    $row['lib_volumen'];
            $item->serie =      $row['ser_titulo'];
            $item->portada =    $row['lib_portada'];
            $item->codigo =     $row['lib_codigo'];
            $item->fechaing =   $row['lib_fechaingreso'];
            $item->precio =     number_format($row['lib_precio'], 0, ',','.');

            //saber si el producto tiene ofertas habilitadas
            date_default_timezone_set('America/Santiago');
            $fecha = (date("YmdHis")).'00';
            if(intval($fecha) >= intval($row['ofe_fechaini']) && intval($fecha) <= intval($row['ofe_fechafin']) && $row['fk_est_idestado'] == 3){
                $estadooferta = true;
            } 

            if($estadooferta){
                if(is_null($row['ofe_cantidad'])){
                    $item->oferta = 0;
                }else{
                    
                    if($row['ofe_tipooferta'] == 'Porcentaje'){
                        $total = number_format($row['lib_precio'] - ($row['lib_precio'] * ($row['ofe_cantidad']) / 100), 0, ',','.');
                    }else{
                        $total = number_format(($row['lib_precio'] - $row['ofe_cantidad']), 0, ',','.');
                    }
                }
            }

            $item->oferta = $total;
            array_push($items, $item); 
        }
        return $items;
    }catch(PDOException $e){
        //echo $e->getMessage();
        //echo "Ya existe esa matrícula";
        return false;
    }
}

function ultimaOferta($db){
    $items = [];
    date_default_timezone_set('America/Santiago');
    $fecha = (date("YmdHis")).'00';

    $query = $db->prepare("SELECT DISTINCT(lib_volumen), lib_idlibro, fk_ser_idserie, li.*, ser.*, ofe.*,
                            (SELECT SUM(inv.inv_stock) FROM inventarios as inv WHERE inv.fk_lib_idlibro = lib_idlibro) AS stock
                            FROM libros AS li
                            LEFT JOIN inventarios as inv ON li.lib_idlibro = inv.fk_lib_idlibro 
                            LEFT JOIN series AS ser ON ser.ser_idserie = li.fk_ser_idserie 
                            LEFT JOIN ofertas AS ofe ON ofe.fk_lib_idlibro = li.lib_idlibro
                            WHERE ofe.fk_est_idestado = 3 
                            AND CAST(:fecha AS INT) BETWEEN CAST(ofe.ofe_fechaini AS INT) AND CAST(ofe.ofe_fechafin AS INT)
                            ORDER BY ofe_idoferta DESC
                            LIMIT 1"
                            );
    try{
        $query->execute(['fecha' => $fecha]);

        while($row = $query->fetch()){
            $item = new Inventario();
            $item->oferta = 0;
            $item->idvolumen =  $row['lib_idlibro'];
            $item->titulo =     $row['lib_titulo'];
            $item->volumen =    $row['lib_volumen'];
            $item->serie =      $row['ser_titulo'];
            $item->portada =    $row['lib_portada'];
            $item->codigo =     $row['lib_codigo'];
            $item->fechaing =   $row['lib_fechaingreso'];
            $item->precio =     number_format($row['lib_precio'], 0, ',','.');
            if($row['ofe_tipooferta'] == 'Porcentaje'){
                $total = number_format($row['lib_precio'] - ($row['lib_precio'] * ($row['ofe_cantidad']) / 100), 0, ',','.');
            }else{
                $total = number_format(($row['lib_precio'] - $row['ofe_cantidad']), 0, ',','.');
            }
            $item->oferta = $total;

            //calcular tiempo restante de la oferta
            $fechafin = $row['ofe_fechafin'];
            $date1 = new DateTime(date("Y-m-d H:i:s"));
            $date2 = new DateTime(substr($fechafin, 0, 4).'-'.substr($fechafin, 4, 2).'-'.substr($fechafin, 6, 2).' '.substr($fechafin, 8, 2).':'.substr($fechafin, 10, 2).':'.substr($fechafin, 12, 2));
            $diff = $date1->diff($date2);

            $item->diasoferta =      $diff->days;
            $item->horasoferta =     $diff->h;
            $item->minutosoferta =   $diff->i;
            $item->segundosoferta =  $diff->s;
            array_push($items, $item); 
        }
        return $items;
    }catch(PDOException $e){
        //echo $e->getMessage();
        //echo "Ya existe esa matrícula";
        return false;
    }
}

function getLstMangas($tipolibro, $cantidad, $pagina){
    require_once 'libs/database.php';
    $desde = ($pagina * $cantidad) - $cantidad;
    $db = new Database();
    $items = [];
    $ultManga;
    try{
        $conn = $db->connect2();
        $result = mysqli_query($conn,"CALL GetLibros(".$tipolibro.", ".$cantidad.", ".$desde.")");

        if ($result){
            while($row = $result->fetch_array()){
                $total = 0;
                $estadooferta = false;
                $item = new Inventario();
                $item->idvolumen =  $row['lib_idlibro'];
                $item->titulo =     $row['lib_titulo'];
                $item->volumen =    $row['lib_volumen'];
                $item->serie =      $row['ser_titulo'];
                $item->portada =    $row['lib_portada'];
                $item->codigo =     $row['lib_codigo'];
                $item->fechaing =   $row['lib_fechaingreso'];
                $item->precio =     number_format($row['lib_precio'], 0, ',','.');

                //saber si el producto tiene ofertas habilitadas
                date_default_timezone_set('America/Santiago');
                $fecha = (date("YmdHis")).'00';
                if(intval($fecha) >= intval($row['ofe_fechaini']) && intval($fecha) <= intval($row['ofe_fechafin']) && $row['fk_est_idestado'] == 3){
                    $estadooferta = true;
                } 

                if($estadooferta){
                    if(is_null($row['ofe_cantidad'])){
                        $item->oferta = 0;
                    }else{
                        
                        if($row['ofe_tipooferta'] == 'Porcentaje'){
                            $total = number_format($row['lib_precio'] - ($row['lib_precio'] * ($row['ofe_cantidad']) / 100), 0, ',','.');
                        }else{
                            $total = number_format(($row['lib_precio'] - $row['ofe_cantidad']), 0, ',','.');
                        }
                    }
                }

                $item->oferta = $total;
                array_push($items, $item); 
            }

            $sqlerror = new Errores();
            $sqlerror->error = '';
            $sqlerror->codigo = 0;

            $lstManga = new LstMangas();
            $lstManga->oproductos = $items;
            $lstManga->oerror = $sqlerror;
        }else{
            //include 'models/class/error.php';
            $sqlerror = new Errores();
            $sqlerror->error = 'No se ha podido encontrar el procedimiento "GetLibros"';
            $sqlerror->codigo = 103;

            $lstManga = new LstMangas();
            $lstManga->oerror = $sqlerror;
        }

        return $lstManga;
        
    }catch(PDOException $e){
        include 'models/class/error.php';
        $sqlerror = new Errores();
        $sqlerror->error = $e->getMessage();
        $sqlerror->codigo = $e->getCode();
        //die("Error occurred:" . $e->getMessage());
        //echo "Ya existe esa matrícula";
        return $sqlerror;
    }
    
}

function getTotalLibros($tipolibro, $cantidad, $pagina){
    require_once 'libs/database.php';
    $desde = ($pagina * $cantidad) - $cantidad;
    $db = new Database();
    $items = [];
    try{
        $lstPaginador = new oPaginador();
        $conn = $db->connect2();
        $result = mysqli_query($conn,"CALL GetLibros(".$tipolibro.", ".$cantidad.", ".$desde.")");

        if ($result){
            $item = new paginadorLibros();
            $item->desde    = $desde+1;
            $item->hasta    = intval($desde) + intval(mysqli_num_rows($result));

            try{
                $query = $db->connect()->query("SELECT COUNT(*) AS Total FROM libros AS li WHERE li.fk_tip_idtipolibro = ".$tipolibro);
                if ($query){
                    while($row = $query->fetch()){
                        $item->total = $row['Total'];
                        $item->paginas  = intval($row['Total']) / $cantidad;
                    }
                }else{
                    $sqlerror = new Errores();
                    $sqlerror->error = 'No se ha podido encontrar el Total de Libros';
                    $sqlerror->codigo = 103;

                    $lstPaginador = new oPaginador();
                    $lstPaginador->oerror = $sqlerror;
                }
            }catch(PDOException $e){
                include 'models/class/error.php';
                $sqlerror = new Errores();
                $sqlerror->error = $e->getMessage();
                $sqlerror->codigo = $e->getCode();
                //die("Error occurred:" . $e->getMessage());
                //echo "Ya existe esa matrícula";
                return $sqlerror;
            }

            array_push($items, $item); 
            

            $sqlerror = new Errores();
            $sqlerror->error = '';
            $sqlerror->codigo = 0;

            $lstPaginador = new oPaginador();
            $lstPaginador->opaginador = $items;
            $lstPaginador->oerror = $sqlerror;
        }else{
            //include 'models/class/error.php';
            $sqlerror = new Errores();
            $sqlerror->error = 'No se ha podido encontrar el procedimiento "GetLibros"';
            $sqlerror->codigo = 103;

            $lstPaginador = new oPaginador();
            $lstPaginador->oerror = $sqlerror;
        }

        return $lstPaginador;
        
    }catch(PDOException $e){
        include 'models/class/error.php';
        $sqlerror = new Errores();
        $sqlerror->error = $e->getMessage();
        $sqlerror->codigo = $e->getCode();
        //die("Error occurred:" . $e->getMessage());
        //echo "Ya existe esa matrícula";
        return $sqlerror;
    }
    
}

?>