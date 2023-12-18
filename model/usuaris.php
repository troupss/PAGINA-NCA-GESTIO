<?php 
require_once 'config/database.php';

class usuaris extends ModelBase{


    public $username;
    public $password;

    public function __construct(){
        parent::__construct();
    }



    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function comprovarUsuari()
    {
        $connexio = database::conectar();
        $sql = "SELECT * FROM NCA_usuaris WHERE username = '$this->username'";
        $resultat = $connexio->query($sql);
        if($resultat->num_rows > 0)
        {
            echo "Aquest usuari ja existeix";
        }
        else
        {
            $this->insertarUsuari();
        }
    }
    public function insertarUsuari(){
        $connexio = database::conectar();
        $sql = "INSERT INTO NCA_usuaris (username, password) VALUES ('$this->username', '$this->password')";
        $result = mysqli_query($connexio, $sql);
        return $result;
    }
}