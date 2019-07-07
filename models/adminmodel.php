<?php

include 'models/class/redessociales.php';
include 'models/class/sucursales.php';

class AdminModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getRedSocial(){
        $redessociales = [];
        $redessociales = getRedesSociales($this->db->connect2());
        return $redessociales;
    }

    public function getSucursal(){
        $sucursales = [];
        $sucursales = getSucurales($this->db->connect2(),$this->db->connect());
        return $sucursales;
    }

}

?>