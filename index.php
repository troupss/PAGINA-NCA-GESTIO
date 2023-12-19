<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-startup-image" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <link rel="icon" type="image/x-icon" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <meta name="description" content="Wepora is a best Graphics, software and Web Development company  and provides all IT solutions to their client. In india.." />
    <meta name="Keywords" content="website design | website development | website logo  |  website hosting  | logo design| logo design ideas  | SEO | android |  best software company in india | cheapest | graphic design | Shrikant Kushwaha">
    <meta name="author" content="contain by Wepora team">
    <meta name="copyright" content="Copyright © 2020 Wepora" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mostrar Productes</title>
</head>

<body>
    <div class="container">


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?controller=productes&action=mostrar_Productes">Productes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?controller=prestecs&action=mostrar_Prestecs">Prestecs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?controller=productes&action=mostrarArxivats">Archivats</a>
                    </li>
            </div>
        </nav>

        <!-- Contenido principal -->
        <?php
            require_once 'autoload.php';
        ?>
        <div>
            <?php
            session_start();
            if (isset($_SESSION['username'])) {
                echo "<h1>Benvingut " . $_SESSION['username'] . "</h1>";
            } else {
                echo "<h1>Benvingut</h1>";
            }
            ?>
        </div>
        <div class="container mt-3">
            <?php
            if (isset($_GET['controller'])) {
                $nom_controller = $_GET['controller'] . 'Controller';
            } else {
                echo "la pagina no existeix";
                exit();
            }

            if (class_exists($nom_controller)) {

                $controller = new $nom_controller();

                if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
                    $action = $_GET['action'];
                    $controller->$action();
                } else {
                    echo "la pagina no existeix";
                }
            } else {
                echo "la pagina no existeix";
            }
            ?>
        </div>
        
        <a href = "login.php?logout-1"><button class="btn btn-outline-primary">Tancar Sessió</button></a>



    </div>
    <!--content end-->
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>