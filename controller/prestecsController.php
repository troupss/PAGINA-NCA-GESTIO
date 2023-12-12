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
            $guardar = $prestecs->insertar();

            header("Location: index.php?controller=prestecs&action=mostrar_Prestecs");
        }

    }

    public function actualitzarPrestec(){
        $id = $_GET["id"];
        $prestecs = new prestecs();
        $prestecs->setPrestecsId($id);
        $prestec = $prestecs->mostrar();
        require_once "views/prestecs/actualitzarPrestecs.php";
    }

    public function actualitzarAction(){
        $prestecs = new prestecs();
        $prestecs->setPrestecsId($_POST["id"]);
        $prestecs->setPrestecsNomProducte($_POST["prestecs_nom_producte"]);
        $prestecs->setPrestecsProducteId($_POST["prestecs_producte_id"]);
        $prestecs->setPrestecsQuantitat($_POST["prestecs_quantitat"]);
        $prestecs->setPrestecsNomDestinatari($_POST["prestecs_nom_destinatari"]);
        $prestecs->modificar();

        header("Location: index.php?controller=prestecs&action=mostrar_Prestecs");
    }

    public function EsborrarPrestec(){
        $id = $_GET["id"];
        $prestecs = new prestecs();
        $prestecs->setPrestecsId($id);
        $prestecs->eliminar();
        header("Location: index.php?controller=prestecs&action=mostrar_Prestecs");
    }


}