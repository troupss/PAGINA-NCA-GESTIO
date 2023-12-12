<?php 
require_once "ModelBase.php";

class productes extends ModelBase{

    public $producte_id;
    public $producte_nom;
    public $producte_armari_id;
    public $producte_quantitat;
    public $producte_foto;

    public function __construct(){
        parent::__construct();
    }

    

    /**
     * Get the value of producte_id
     */ 
    public function getProducte_id()
    {
        return $this->producte_id;
    }

    /**
     * Set the value of producte_id
     *
     * @return  self
     */ 
    public function setProducte_id($producte_id)
    {
        $this->producte_id = $producte_id;

        return $this;
    }

    /**
     * Get the value of producte_nom
     */ 
    public function getProducte_nom()
    {
        return $this->producte_nom;
    }

    /**
     * Set the value of producte_nom
     *
     * @return  self
     */ 
    public function setProducte_nom($producte_nom)
    {
        $this->producte_nom = $producte_nom;

        return $this;
    }

    /**
     * Get the value of producte_armari_id
     */ 
    public function getProducte_armari_id()
    {
        return $this->producte_armari_id;
    }

    /**
     * Set the value of producte_armari_id
     *
     * @return  self
     */ 
    public function setProducte_armari_id($producte_armari_id)
    {
        $this->producte_armari_id = $producte_armari_id;

        return $this;
    }

    /**
     * Get the value of producte_quantitat
     */ 
    public function getProducte_quantitat()
    {
        return $this->producte_quantitat;
    }

    /**
     * Set the value of producte_quantitat
     *
     * @return  self
     */ 
    public function setProducte_quantitat($producte_quantitat)
    {
        $this->producte_quantitat = $producte_quantitat;

        return $this;
    }
    /**
     * Get the value of producte_foto
     */ 
    public function getProducte_foto()
    {
        return $this->producte_foto;
    }

    /**
     * Set the value of producte_foto
     *
     * @return  self
     */ 
    public function setProducte_foto($producte_foto)
    {
        $this->producte_foto = $producte_foto;

        return $this;
    }

    public function insertar_Producte(){
        $sql = "INSERT INTO NCA_productes (`producte_nom`, `producte_armari_id`, `producte_quantitat`, `foto` ) VALUES('{$this->getProducte_nom()}', '{$this->getProducte_armari_id()}', '{$this->getProducte_quantitat()}', '{$this->getProducte_foto()}');";
        echo "No Has insertat un Producte correctament, revisa les dades i torna-ho a provar!";
        $guardar = $this->db->query($sql);
        return $guardar;
        
    }

    public function mostrar(){
        $connexio = database::conectar();
        $sql = "SELECT * FROM NCA_productes WHERE producte_id = {$this->getProducte_id()}";
        $producte = mysqli_query($connexio, $sql);
        return $producte;
    }

    public function modificar(){
        $connexio = database::conectar();
        $sql = "UPDATE NCA_productes SET producte_nom = '$this->producte_nom', producte_armari_id = '$this->producte_armari_id', producte_quantitat = '$this->producte_quantitat', foto = '$this->producte_foto' WHERE producte_id = '$this->producte_id'";
        $result = mysqli_query($connexio, $sql);
        return $result;
    }

    public function eliminar(){
        $connexio = database::conectar();
        $sql = "DELETE FROM NCA_productes WHERE producte_id = {$this->producte_id};";
        $result = mysqli_query($connexio, $sql);
        return $result;
    }

    
}