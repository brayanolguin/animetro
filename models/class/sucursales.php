<?php

//include 'models/class/error.php';

Class Sucursal{
    public $id;
    public $direccion;
    public $idtienda;
    public $tienda;
    public $estado;
    public $comuna;
    public $provincia;
    public $region;
    public $telefono;
    public $horarios;
}

Class Horario{
    public $idhorario;
    public $horario;
}

Class LstSucursal{
    public $osucursal;
    public $oerror;
}

function getSucurales($db, $db2){
    $lstSuc = new LstSucursal();
    $items = [];
    $numSucursal = 1;
    try{
        $sqlerror = new Errores();
        $sqlerror->error = '';
        $sqlerror->codigo = 0;

        $conn = $db;
        $sql = "CALL GetSucursales(".constant('TIENDA').");"; 
        $result = mysqli_query($conn, $sql);
        if ($result){
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $items2 = [];
                $numSucursal = $row['suc_numsucursal'];
                $item = new Sucursal();
                $item->id =         $row['suc_numsucursal'];
                $item->direccion =  utf8_encode($row['suc_direccion']);
                $item->idtienda =   $row['tie_numtienda'];
                $item->tienda =     utf8_encode($row['tie_nombre']);
                $item->estado =     utf8_encode($row['est_estado']);
                $item->comuna =     utf8_encode($row['com_comuna']);
                $item->provincia =  utf8_encode($row['pro_provincia']);
                $item->region =     utf8_encode($row['reg_region']);
                $item->telefono =   $row['suc_telefono'];
                

                $query2 = $db2->prepare("SELECT * FROM horarios as ho
                                    where ho.fk_suc_idsucursal = :idsucursal");
                try{
                    $query2->execute(['idsucursal' => $row['suc_numsucursal']]);
                    while($row2 = $query2->fetch()){
                        $item2 = new Horario();
                        $item2->idhorario = $row2['hor_idhorario'];
                        $item2->horario =   $row2['hor_horario'];
                        
                        array_push($items2, $item2); 
                        
                    }
                    $item->horarios = $items2;
                }catch(PDOException $e){
                    return [];
                }
                /*try{
                    $conn = $db;
                    $sql2 = "CALL GetHorarios(".$numSucursal.");"; 
                    $result2 = mysqli_query($conn, $sql2);
                    if ($result2){
                        while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
                            $item2 = new Horario();
                            $item2->idhorario = $row2['hor_idhorario'];
                            $item2->horario =   $row2['hor_horario'];
                            
                            array_push($items2, $item2); 
                            
                        }
                        $item->horarios = $items2;
                        $result2->close();
                    }else{
                        //include 'models/class/error.php';
                        $sqlerror->error = 'No se ha podido encontrar el procedimiento "GetHorarios"';
                        $sqlerror->codigo = 103;
            
                        $lstSuc->oerror = $sqlerror;
                    }
                }catch(PDOException $e){
                    $sqlerror->error = $e->getMessage();
                    $sqlerror->codigo = $e->getCode();
                    $sucursales = new LstSucursal();
                    $sucursales->oerror = $sqlerror;
                    return $sucursales;
                }*/
                
                array_push($items, $item); 
            }

            $lstSuc->osucursal = $items;
            $lstSuc->oerror = $sqlerror;
            $result->close();
        }else{
            //include 'models/class/error.php';
            $sqlerror->error = 'No se ha podido encontrar el procedimiento "GetSucursales"';
            $sqlerror->codigo = 103;

            $lstSuc->oerror = $sqlerror;
            return $lstSuc;
        }
        return $lstSuc;
    }catch(PDOException $e){
        $sqlerror = new Errores();
        $sqlerror->error = $e->getMessage();
        $sqlerror->codigo = $e->getCode();
        $sucursales = new LstSucursal();
        $sucursales->oerror = $sqlerror;
        return $sucursales;
    }
}

?>