<?php
require_once 'model/usuaris.php';
require_once 'model/ModelBase.php';

class usuariController
{
    public function loguearUsuari()
    {
        if (isset($_POST['submit'])) 
        {
            echo "hola";



        }
    }
    public function registrarUsuaris()
    {
        if(isset($_POST['submit']))
        {
            $usuaris = new usuaris();
            $usuaris->setUsername($_POST['nomusuari']);
            $contrasenya = $_POST['contrasenya'];
            $contrasenya2 = $_POST['contrasenya2'];
            
            if($contrasenya == $contrasenya2)
            {
                $contrasenya = password_hash($contrasenya, PASSWORD_DEFAULT);
                $usuaris->setPassword($contrasenya);
            }
            else
            {
                echo "Les contrasenyes no coincideixen";
            }
            $usuaris->comprovarUsuari();

            header("Location: index.php?controller=usuaris&action=loguearUsuari");
        }
    }



}