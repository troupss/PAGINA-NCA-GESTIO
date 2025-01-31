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
    <title>Utilitat</title>
</head>
<?php
    $prestecs = $prestec->fetch_object();
?>

<body>
    <!--content start-->
    <div class="container mt-5 pt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center m-auto">
                            <h4 class="text-uppercase text-center">Actualitzar Prestecs</h4>
                        </div>
                        <form action="index.php?controller=prestecs&action=actualitzarAction" method="post">
                            <input type="hidden" name="csrftoken" value="ea49375f43c7e6a59c77df1e4de562b3f1350124eeb70e5d5124e4ce3b5251c2b4d12e9aaf2a3ddc618c178c8dc4620b">
                            <div class="form-group mb-3">
                                <label for="fname">Nom Producte</label>
                                <input type="hidden" name="id" value="<?= $prestecs->prestecs_id ?>">
                                <input type="text" name="prestecs_nom_producte" class="form-control" value="<?= $prestecs->prestecs_nom_producte ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname">ID del Producte</label>
                                <input type="text" name="prestecs_producte_id" class="form-control" value="<?= $prestecs->prestecs_producte_id ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname">Quantitat</label>
                                <input type="text" name="prestecs_quantitat" class="form-control" value="<?= $prestecs->prestecs_quantitat?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname">Nom del Destinatari</label>
                                <input type="text" name="prestecs_nom_destinatari" class="form-control" value="<?= $prestecs->prestecs_nom_destinatari ?>">
                            </div>
                            <br>
                            <div class="form-group mb-0 d-flex justify-content-between">
                                <button class="btn btn-outline-primary" type="submit" name="submit" id="submit">Actualitzar</button>
                            </div>
                        </form>
                        <a href="index.php?controller=prestecs&action=mostrar_Prestecs"><button class="btn btn-outline-primary">Tornar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    ?>
    <!--content end-->
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>