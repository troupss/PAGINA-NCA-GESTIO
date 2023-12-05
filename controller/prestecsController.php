<?php
require_once "model/prestecs.php";
require_once "model/ModelBase.php";

class prestecsController
{
    public function mostrar_Prestecs(){
        $prestecs = new prestecs();
        $prestec = $prestecs->mostrar_tot("NCA_prestecs");

        require_once "views/prestecs/mostrarPrestecs.php";
    }
    
    public function afegir_Prestecs(){
        require_once "views/productes/afegirPrestecs.php";
    }

    public function crear(){
        $prestecs = new prestecs();
        $prestecs->setPrestecsId($_POST["prestecs_id"]);
        $prestecs->setPrestecsNomProducte($_POST["prestecs_nom_producte"]);
        $prestecs->setPrestecsProducteId($_POST["prestecs_producte_id"]);
        $prestecs->setPrestecsQuantitat($_POST["prestecs_quantitat"]);
        $prestecs->setPrestecsNomDestinatari($_POST["prestecs_nom_destinatari"]);
        $prestecs->insertar();

        header("Location: index.php?controller=prestec&action=mostrartot");


    }

    public function actualizar(){

        $PrestecId = $_GET["prestec_id"];
        $prestecs = new prestecs();
        $prestecs->setPrestecsId($PrestecId);
        $prestecs->retornar();

        header("Location: index.php?controller=prestec&action=mostrartot");
    }

}