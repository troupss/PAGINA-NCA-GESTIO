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
        require_once "views/prestecs/afegirPrestecs.php";
    }

    public function crear(){
        if(isset($_POST)){
            $prestecs = new prestecs();
            $prestecs->setPrestecsNomProducte($_POST['prestecs_nom_producte']);
            $prestecs->setPrestecsProducteId($_POST['prestecs_producte_id']);
            $prestecs->setPrestecsQuantitat($_POST['prestecs_quantitat']);
            $prestecs->setPrestecsNomDestinatari($_POST['prestecs_nom_destinatari']);
            $guardar = $prestecs->insertar("NCA_prestecs");

            header("Location: index.php?controller=prestecs&action=mostrar_Prestecs");
        }

    }

    public function editar() {

        $prestecs = new prestecs();
        $prestecs->setPrestecsId($_POST["prestecs_id"]);
        $prestecs->setPrestecsNomProducte($_POST["prestecs_nom_producte"]);
        $prestecs->setPrestecsProducteId($_POST["prestecs_producte_id"]);
        $prestecs->setPrestecsQuantitat($_POST["prestecs_quantitat"]);
        $prestecs->setPrestecsNomDestinatari($_POST["prestecs_nom_destinatari"]);
        $prestecs->modificar();

        header("Location: index.php?controller=prestec&action=mostrar_Prestecs");
        
    }

    public function actualizar(){
        $prestecs = new prestecs();
        $prestecs->setPrestecsId($_GET["id"]);
        $row = $prestecs->mostrar();
        require_once "views/prestecs/actualitzarPrestecs.php";
    }

}