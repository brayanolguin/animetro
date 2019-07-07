<?php

Class TiposLibro{
    public $idtipolibro;
    public $tipolibro;
}

Class LstTipoLibro{
    public $otipolibro;
    public $oerror;
}

function getTiposLibro($db){
    $lstTL = new LstTipoLibro();
    $items = [];
    try{
        $conn = $db;
        $sql = "CALL GetTiposLibros(0)"; 
        $result = mysqli_query($conn, $sql);
            if ($result){
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    $item = new RedSocial();
                    $item->idtipolibro =  $row['tip_idtipolibro'];
                    $item->tipolibro =    $row['tip_tipolibro'];
                    array_push($items, $item);   
                } 

                $sqlerror = new Errores();
                $sqlerror->error = '';
                $sqlerror->codigo = 0;

                $lstTL->otipolibro = $items;
                $lstTL->oerror = $sqlerror;
                $result->close();
            }else{
                //include 'models/class/error.php';
                $sqlerror = new Errores();
                $sqlerror->error = 'No se ha podido encontrar el procedimiento "GetTiposLibros"';
                $sqlerror->codigo = 103;
    
                $lstTL->oerror = $sqlerror;
            }
                
            
            return $lstTL;
        
    }catch(PDOException $e){
        $sqlerror = new Errores();
        $sqlerror->error = $e->getMessage();
        $sqlerror->codigo = $e->getCode();
        $tipolibro = new LstTipoLibro();
        $tipolibro->oerror = $sqlerror;
        return $tipolibro;
    }
}

?>