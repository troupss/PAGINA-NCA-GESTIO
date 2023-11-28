<?php 
require_once 'ModelBase.php';

class productes extends ModelBase{


    public function __construct(){
        parent::__construct();
    }

    public function mostrar_tot($tabla){
        $query = $this->db->query("SELECT * FROM $tabla");
        return $query;
    }
}