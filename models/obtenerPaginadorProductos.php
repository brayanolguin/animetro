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
        try{
            $lstPaginador = new oPaginador();
            $conn = $db->connect2();
            $result = mysqli_query($conn,"CALL GetLibros(".$tipolibro.", ".$cantidad.", ".$desde.")");
    
            if ($result){
                $item = new paginadorLibros();
                $item->desde    = $desde+1;
                $item->hasta    = intval($desde) + intval(mysqli_num_rows($result));
    
                try{
                    $query = $db->connect()->query("SELECT COUNT(*) AS Total FROM libros AS li WHERE li.fk_tip_idtipolibro = ".$tipolibro. " OR ".$tipolibro." = 0");
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
                    $sqlerror = json_encode($sqlerror);
                    echo $sqlerror;
                }
    
                array_push($items, $item); 
                
    
                $sqlerror = new Errores();
                $sqlerror->error = '';
                $sqlerror->codigo = 0;
    
                $lstPaginador = new oPaginador();
                $lstPaginador->opaginador = $items;
                $lstPaginador->oerror = $sqlerror;
                $lstPaginador = json_encode($lstPaginador);
            }else{
                //include 'models/class/error.php';
                $sqlerror = new Errores();
                $sqlerror->error = 'No se ha podido encontrar el procedimiento "GetLibros"';
                $sqlerror->codigo = 103;

                $lstPaginador = new oPaginador();
                $lstPaginador->oerror = $sqlerror;
                $lstPaginador = json_encode($lstPaginador);
            }

            echo $lstPaginador;
        
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