<?php

include 'models/class/redessociales.php';
include 'models/class/sucursales.php';
include 'models/class/manga.php';
include 'models/class/inventario.php';

class MainModel extends Model{

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

    public function getUltimoManga(){
        $ultManga = [];
        $ultManga = ultimoManga($this->db->connect2());
        return $ultManga;
    }

    public function getUltimosProductos(){
        $prodDest = [];
        $prodDest = productosDestacados($this->db->connect());
        return $prodDest;
    }

    public function getUltimaOferta(){
        $ultOferta = [];
        $ultOferta = ultimaOferta($this->db->connect());
        return $ultOferta;
    }
}

?>