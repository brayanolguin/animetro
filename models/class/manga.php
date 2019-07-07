<?php
//include 'models/class/inventario.php';

Class Manga{
    public $numero;
    public $titulo;
    public $volumen;
    public $resenia;
    public $codigo;
    public $portada;
    public $contraPortada;
    public $tipoLibro;
    public $editorial;
    public $serie;
    public $idioma;
}

Class UltManga{
    public $omanga;
    public $oerror;
}

function ultimoManga($db){
    $items = [];
    $ultManga;
    try{
        $conn = $db;
        $result = mysqli_query($conn,"CALL GetUltimoLibro(1)");

        if ($result){
            while($row = $result->fetch_array()){
                $item = new Manga();
                $item->numero =         $row['lib_idlibro'];
                $item->titulo =         $row['lib_titulo'];
                $item->volumen =        $row['lib_volumen'];
                $item->resenia =        $row['lib_resenia'];
                $item->codigo =         $row['lib_codigo'];
                $item->portada =        $row['lib_portada'];
                $item->contraPortada =  $row['lib_contraPortada'];
                $item->tipoLibro =      $row['tip_tipolibro'];
                $item->editorial =      $row['edi_editorial'];
                $item->serie =          $row['ser_titulo'];
                $item->idioma =         $row['edi_idioma'];
                array_push($items, $item); 
            }

            $sqlerror = new Errores();
            $sqlerror->error = '';
            $sqlerror->codigo = 0;

            $ultManga = new UltManga();
            $ultManga->omanga = $items;
            $ultManga->oerror = $sqlerror;
        }else{
            //include 'models/class/error.php';
            $sqlerror = new Errores();
            $sqlerror->error = 'No se ha podido encontrar el procedimiento "GetUltimoLibro"';
            $sqlerror->codigo = 103;

            $ultManga = new UltManga();
            $ultManga->oerror = $sqlerror;
        }

        return $ultManga;
        
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