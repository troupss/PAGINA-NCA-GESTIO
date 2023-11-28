<?php 
require_once 'ModelBase.php';

class productes extends ModelBase{

    public $producte_id;
    public $producte_nom;
    public $producte_armari_id;
    public $producte_quantitat;

    public function __construct(){
        parent::__construct();
    }

    public function getProducte_id(){
        return $this->producte_id;
    }

    public function setProducte_id($producte_id){
        $this->producte_id = $producte_id;
    }

    public function getProducte_nom(){
        return $this->producte_nom;
    }

    public function setProducte_nom($producte_nom){
        $this->producte_nom = $producte_nom;
    }

    public function getProducte_armari_id(){
        return $this->producte_armari_id;
    }

    public function setProducte_armari_id($producte_armari_id){
        $this->producte_armari_id = $producte_armari_id;
    }

    public function getProducte_quantitat(){
        return $this->producte_quantitat;
    }

    public function setProducte_quantitat($producte_quantitat){
        $this->producte_quantitat = $producte_quantitat;
    }

    public function mostrar_tot($tabla){
        $query = $this->db->query("SELECT * FROM $tabla");
        return $query;
    }
}