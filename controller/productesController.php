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
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            // Manejar otros datos del formulario
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

            $guardar = $producte->insertar_Producte("NCA_productes");

            header("Location: index.php?controller=productes&action=mostrar_Productes");
        }
    }
}
