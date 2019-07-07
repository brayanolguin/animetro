<?php 
    include_once '../models/class/inventario.php';

    Class Errores{
        public $error;
        public $codigo;
    }

    try{
        include_once '../config/config.php';
        require_once '../libs/database.php';
        $tipolibro = intval(isset($_GET['tipolibro']) ? $_GET['tipolibro'] : 1);
        $cantidad = intval(isset($_GET['cantidad']) ? $_GET['cantidad'] : 12);
        $pagina = intval(isset($_GET['pagina']) ? $_GET['pagina'] : 1);

        $desde = ($pagina * $cantidad) - $cantidad;
        $db = new Database();
        $items = [];
        $ultManga;        

        $conn = $db->connect2();
        $result = mysqli_query($conn,"CALL GetLibros(".$tipolibro.", ".$cantidad.", ".$desde.")");

        if ($result){
            while($row = $result->fetch_array()){
                $total = 0;
                $estadooferta = false;
                $item = new Inventario();
                $item->idvolumen =  $row['lib_idlibro'];
                $item->titulo =     utf8_encode($row['lib_titulo']);
                $item->volumen =    utf8_encode($row['lib_volumen']);
                $item->serie =      utf8_encode($row['ser_titulo']);
                $item->portada =    utf8_encode($row['lib_portada']);
                $item->codigo =     utf8_encode($row['lib_codigo']);
                $item->fechaing =   utf8_encode($row['lib_fechaingreso']);
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
            $lstManga = json_encode($lstManga);
        }else{
            //include 'models/class/error.php';
            $sqlerror = new Errores();
            $sqlerror->error = 'No se ha podido encontrar el procedimiento "GetLibros"';
            $sqlerror->codigo = 103;

            $lstManga = new LstMangas();
            $lstManga->oerror = $sqlerror;
            $lstManga = json_encode($lstManga);
        }

        echo $lstManga;
        
    }catch(PDOException $e){
        include 'models/class/error.php';
        $sqlerror = new Errores();
        $sqlerror->error = $e->getMessage();
        $sqlerror->codigo = $e->getCode();
        //die("Error occurred:" . $e->getMessage());
        //echo "Ya existe esa matrícula";
        $sqlerror = json_encode($sqlerror);
        echo $sqlerror;
    }
?>