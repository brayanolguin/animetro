<?php

Class Menu{
    public $id;
    public $nombre;
    public $direccion;
    public $orden;
    public $estado;
    public $codestado;
    public $subclase;
    public $submenu;
}

function get($db){
    $items = [];
    $submenus = [];
    try{
        $query = $db->query("SELECT * FROM menu ORDER BY men_norden ASC");

        while($row = $query->fetch()){
            $item = new Menu();
            $item->id =         $row['men_nid'];
            $item->nombre =     $row['men_snombre'];
            $item->direccion =  $row['men_sdireccion'];
            $item->orden =      $row['men_norden'];
            $item->estado =     $row['men_sestado'];
            $item->codestado =  $row['men_scodestado'];
            $item->subclase =   $row['men_ssubclase'];
            $item->submenu =    [];

            if ($row['men_ssubclase'] == null && $row['men_scodestado'] == 'A'){
                array_push($items, $item); 
            }else{
                array_push($submenus, $item);
            }
        }

        foreach($items as $men){
            $menus = [];
            foreach($submenus as $sub){
                if ($sub->subclase == $men->id){
                    $item = new Menu();
                    $item->id =         $sub->id;
                    $item->nombre =     $sub->nombre;
                    $item->direccion =  $sub->direccion;
                    $item->orden =      $sub->orden;
                    $item->estado =     $sub->estado;
                    $item->codestado =  $sub->codestado;
                    $item->subclase =   $sub->subclase;
                    $item->submenu =    [];

                    array_push($menus, $item); 
                }
            }
            $men->submenu = $menus;
        }

        return $items;
    }catch(PDOException $e){
        return [];
    }
}

?>