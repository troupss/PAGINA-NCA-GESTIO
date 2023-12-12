<?php 
require_once 'ModelBase.php';

class prestecs extends ModelBase{

    public function __construct(){
        parent::__construct();
    }

    public $prestecs_id;
    public $prestecs_nom_producte;
    public $prestecs_producte_id;
    public $prestecs_quantitat;
    public $prestecs_nom_destinatari;

    


    /**
     * Get the value of prestecs_id
     */
    public function getPrestecsId()
    {
        return $this->prestecs_id;
    }

    /**
     * Set the value of prestecs_id
     */
    public function setPrestecsId($prestecs_id): self
    {
        $this->prestecs_id = $prestecs_id;

        return $this;
    }

    /**
     * Get the value of prestecs_nom_producte
     */
    public function getPrestecsNomProducte()
    {
        return $this->prestecs_nom_producte;
    }

    /**
     * Set the value of prestecs_nom_producte
     */
    public function setPrestecsNomProducte($prestecs_nom_producte): self
    {
        $this->prestecs_nom_producte = $prestecs_nom_producte;

        return $this;
    }

    /**
     * Get the value of prestecs_producte_id
     */
    public function getPrestecsProducteId()
    {
        return $this->prestecs_producte_id;
    }

    /**
     * Set the value of prestecs_producte_id
     */
    public function setPrestecsProducteId($prestecs_producte_id): self
    {
        $this->prestecs_producte_id = $prestecs_producte_id;

        return $this;
    }

    /**
     * Get the value of prestecs_quantitat
     */
    public function getPrestecsQuantitat()
    {
        return $this->prestecs_quantitat;
    }

    /**
     * Set the value of prestecs_quantitat
     */
    public function setPrestecsQuantitat($prestecs_quantitat): self
    {
        $this->prestecs_quantitat = $prestecs_quantitat;

        return $this;
    }

    /**
     * Get the value of prestecs_nom_destinatari
     */
    public function getPrestecsNomDestinatari()
    {
        return $this->prestecs_nom_destinatari;
    }

    /**
     * Set the value of prestecs_nom_destinatari
     */
    public function setPrestecsNomDestinatari($prestecs_nom_destinatari): self
    {
        $this->prestecs_nom_destinatari = $prestecs_nom_destinatari;

        return $this;
    }

    public function insertar(){
        $connexio = database::conectar();
        $sql = "INSERT INTO NCA_prestecs (prestecs_nom_producte, prestecs_producte_id, prestecs_quantitat, prestecs_nom_destinatari) VALUES ('$this->prestecs_nom_producte', '$this->prestecs_producte_id', '$this->prestecs_quantitat', '$this->prestecs_nom_destinatari')";
        $result = mysqli_query($connexio, $sql);
        return $result;
    }

    public function modificar(){
        $connexio = database::conectar();
        $sql = "UPDATE NCA_prestecs SET prestecs_nom_producte = '$this->prestecs_nom_producte', prestecs_producte_id = '$this->prestecs_producte_id', prestecs_quantitat = '$this->prestecs_quantitat', prestecs_nom_destinatari = '$this->prestecs_nom_destinatari' WHERE prestecs_id = '$this->prestecs_id'";
        $result = mysqli_query($connexio, $sql);
        return $result;
    }


    public function mostrar(){
        $connexio = database::conectar();
        $sql = "SELECT * FROM NCA_prestecs WHERE prestecs_id = '$this->prestecs_id'";
        $result = mysqli_query($connexio, $sql);
        return $result;
    }

       
}