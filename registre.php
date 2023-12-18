<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registre</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5 pt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center m-auto">
                            <h4 class="text-uppercase text-center">Registre</h4>
                        </div>
                        <form action="registre.php" method="post">
                            <input type="hidden" name="csrftoken" value="ea49375f43c7e6a59c77df1e4de562b3f1350124eeb70e5d5124e4ce3b5251c2b4d12e9aaf2a3ddc618c178c8dc4620b">
                            <div class="form-group mb-3">
                                <label for="fname">USUARI </label>
                                <input type="text" name="nomusuari" placeholder="Introduexi el teu usuari" class="form-control" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">CONTRASENYA</label>
                                <div class="input-group bg-light" id="show_hide_password">
                                    <input type="password" class="form-control" name="contrasenya" id="" required placeholder="Introdueix la teva contrasenya">
                                    <div class="input-group-addon">
                                        <a href=""><i class="fa fa-lg fa-eye" style="padding-top: 10px; padding-left: 10px; padding-right: 10px;" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">CONFIRMAR CONTRASENYA</label>
                                <div class="input-group bg-light" id="show_hide_password">
                                    <input type="password" class="form-control" name="contrasenya2" id="" required placeholder="Repeteix la teva contrasenya">
                                </div>
                            </div>
                            <div>
                                <a href="login.php" class="m-1">
                                    <button type="button" class="btn btn-outline-primary">Ja tinc compte</button>
                                </a>
                            </div>
                            <br>
                            <div class="form-group mb-0 d-flex justify-content-between">
                                <button class="btn btn-primary btn-block" type="submit" name="submit" id="submit">Registrar-se</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>