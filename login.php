<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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





    
    <!-- Agrega los scripts de Bootstrap al final del cuerpo del documento para mejorar el rendimiento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>