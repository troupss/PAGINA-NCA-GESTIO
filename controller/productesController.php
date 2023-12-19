<?php
require_once 'model/productes.php';
require_once 'model/ModelBase.php';

class productesController
{
    public function mostrar_Productes()
    {
        $productes = new productes();
        $producte = $productes->mostrar_tot("NCA_productes");

        require_once "views/productes/mostrarProductes.php";
    }

    public function afegir_Producte()
    {
        require_once "views/productes/afegirProductes.php";
    }
    public function guardar_Producte()
    {
        if (isset($_POST['submit'])) {
            
            $producte = new productes();
            $producte->setProducte_nom($_POST['producte_nom']);
            $producte->setProducte_armari_id($_POST['armari_id']);
            $producte->setProducte_quantitat($_POST['quantitat']);

            $ruta = "img/";
            $nom = $_FILES['foto']['name'];
            $directorioTemp = $_FILES['foto']['tmp_name'];
            $datahora = date('YmdHis');
            $nom =  $datahora . $nom;
            move_uploaded_file($directorioTemp, $ruta . $nom);
            $producte->setProducte_foto($nom);

            $producte->insertar_Producte();

            header("Location: index.php?controller=productes&action=mostrar_Productes");
        }
    }

    public function actualitzar_Producte(){
        $id = $_GET["id"];
        $productes = new productes();
        $productes->setProducte_id($id);
        $producte = $productes->mostrar();
        require_once "views/productes/actualitzarProductes.php";
    }

    public function actualitzarAction(){
        $productes = new productes();
        $productes->setProducte_id($_POST["producte_id"]);
        $productes->setProducte_nom($_POST["producte_nom"]);
        $productes->setProducte_armari_id($_POST["producte_armari_id"]);
        $productes->setProducte_quantitat($_POST["producte_quantitat"]);

        $ruta = "img/";
        $nom = $_FILES['foto']['name'];
        $directorioTemp = $_FILES['foto']['tmp_name'];
        $datahora = date('YmdHis');
        $nom =  $datahora . $nom;
        move_uploaded_file($directorioTemp, $ruta . $nom);
        $productes->setProducte_foto($nom);
            
        $productes->modificar();

        header("Location: index.php?controller=productes&action=mostrar_Productes");
    }

    public function EsborrarProducte(){
        $id = $_GET["id"];
        $productes = new productes();
        $productes->setProducte_id($id);
        $productes->eliminar();
        header("Location: index.php?controller=productes&action=mostrar_Productes");
    }
}
