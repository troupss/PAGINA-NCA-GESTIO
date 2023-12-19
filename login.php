<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-startup-image" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <link rel="icon" type="image/x-icon" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <meta name="description" content="Wepora is a best Graphics, software and Web Development company  and provides all IT solutions to their client. In india.."/>
    <meta name="Keywords" content="website design | website development | website logo  |  website hosting  | logo design| logo design ideas  | SEO | android |  best software company in india | cheapest | graphic design | Shrikant Kushwaha">
    <meta name="author" content="contain by Wepora team">
    <meta name="copyright" content="Copyright © 2020 Wepora" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>Login Usuari</title>
  </head>
<body>
<!--content start-->
<div class="container mt-5 pt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center m-auto">
                            <h4 class="text-uppercase text-center">Login</h4>
                        </div>
                        <form action="login.php" method="post">
                            <input type="hidden" name="csrftoken" value="ea49375f43c7e6a59c77df1e4de562b3f1350124eeb70e5d5124e4ce3b5251c2b4d12e9aaf2a3ddc618c178c8dc4620b">
                            <div class="form-group mb-3">
                                <label for="usuari">Usuari </label>
                                <input type="text" class="form-control" name="nomusuari" id="" required placeholder="Introdueix el teu usuari">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <div class="input-group bg-light" id="show_hide_password">
                                    <input type="password" class="form-control" name="contrasenya" id="" required placeholder="Introdueix la teva contrasenya">
                                    <div class="input-group-addon">
                                        <a href=""><i class="fa fa-lg fa-eye" style="padding-top: 10px; padding-left: 10px; padding-right: 10px;" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
        
                            <div>
                                <a href="registre.php" class="m-1">
                                    <button type="button" class="btn btn-outline-primary">No tinc compte</button>
                                </a>
                            </div>
                            <br>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit" name="submit"> Log In </button>
                            </div>
                            
                            <script>
                                $(document).ready(function() {
                                    $("#show_hide_password a").on('click', function(event) {
                                        event.preventDefault();
                                        if ($('#show_hide_password input').attr("type") == "text") {
                                            $('#show_hide_password input').attr('type', 'password');
                                            $('#show_hide_password i').addClass("fa-eye-slash");
                                            $('#show_hide_password i').removeClass("fa-eye");
                                        } else if ($('#show_hide_password input').attr("type") == "password") {
                                            $('#show_hide_password input').attr('type', 'text');
                                            $('#show_hide_password i').removeClass("fa-eye-slash");
                                            $('#show_hide_password i').addClass("fa-eye");
                                        }
                                    });
                                });
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php
require_once 'model/ModelBase.php';
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['nomusuari'];
    $password = $_POST['contrasenya'];

    $sql = "SELECT * FROM NCA_usuaris WHERE username = '$username'";
    $connexio = database::conectar();
    $result = mysqli_query($connexio, $sql);

    $num = mysqli_num_rows($result);
    
    if($num == 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION['username'] = $username;
            header("Location: index.php?controller=productes&action=mostrar_Productes");
        }else{
            echo "Contrasenya incorrecta";
        }
    }else{
        echo "Usuari incorrecte";
    }
    if (isset($_GET["logout"]) && $_GET["logout"] == 1) {
        session_destroy();
        header("Location:login.php");
    }  
}

?>
<!--content end-->
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>