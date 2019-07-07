<?php

include 'models/class/redessociales.php';
include 'models/class/sucursales.php';
include 'models/class/tiposlibro.php';
include 'models/class/inventario.php';

class ProductosModel extends Model{

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

    public function getTipoLibro(){
        $tiposlibros = [];
        $tiposlibros = getTiposLibro($this->db->connect2());
        return $tiposlibros;
    }

    public function getProductos(){
        $lstproductos = [];
        $lstproductos = getLstMangas(1,12,1);
        return $lstproductos;
    }

    public function getTotalProductos(){
        $totalproductos = [];
        $totalproductos = getTotalLibros(1,12,1);
        return $totalproductos;
    }
}

?>