<?php

include 'models/class/error.php';

Class RedSocial{
    public $idrst;
    public $direccion;
    public $nombre;
    public $icono;
    public $idredsocial;
}

Class LstRedSocial{
    public $oredsocial;
    public $oerror;
}

function getRedesSociales($db){
    $lstRS = new LstRedSocial();
    $items = [];
    try{
        $conn = $db;
        $sql = "CALL GetRedesSociales(".constant('TIENDA').")"; 
        $result = mysqli_query($conn, $sql);
            if ($result){
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    $item = new RedSocial();
                    $item->idrst =          $row['rst_idredsocialtienda'];
                    $item->idredsocial =    $row['fk_res_idredsocial'];
                    $item->direccion =      $row['rst_direccion'];
                    $item->nombre =         $row['res_nombre'];
                    $item->icono =          $row['res_icono'];
                    array_push($items, $item);   
                } 

                $sqlerror = new Errores();
                $sqlerror->error = '';
                $sqlerror->codigo = 0;

                $lstRS->oredsocial = $items;
                $lstRS->oerror = $sqlerror;
                $result->close();
            }else{
                //include 'models/class/error.php';
                $sqlerror = new Errores();
                $sqlerror->error = 'No se ha podido encontrar el procedimiento "GetRedesSociales"';
                $sqlerror->codigo = 103;
    
                $lstRS->oerror = $sqlerror;
            }
                
            
            return $lstRS;
        
    }catch(PDOException $e){
        $sqlerror = new Errores();
        $sqlerror->error = $e->getMessage();
        $sqlerror->codigo = $e->getCode();
        $ultManga = new LstRedSocial();
        $ultManga->oerror = $sqlerror;
        return $ultManga;
    }
}

?>