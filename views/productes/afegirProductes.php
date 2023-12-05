<!doctype html>
<html lang="en">

<head>
    <!-- Meta etiquetas requeridas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-startup-image" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <link rel="icon" type="image/x-icon" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <meta name="description" content="Wepora es la mejor empresa de gráficos, software y desarrollo web y ofrece todas las soluciones de TI a sus clientes en India." />
    <meta name="Keywords" content="diseño de sitios web | desarrollo de sitios web | logotipo del sitio web | alojamiento de sitios web | diseño de logotipos | ideas de diseño de logotipos | SEO | android | mejor empresa de software en India | más barato | diseño gráfico | Shrikant Kushwaha">
    <meta name="author" content="contenida por el equipo de Wepora">
    <meta name="copyright" content="Copyright © 2020 Wepora" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>Productos</title>
</head>

<body>
    <!-- Contenido comienza -->
    <div class="container mt-5 pt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center m-auto">
                            <h4 class="text-uppercase text-center">Insertar Productos</h4>
                        </div>
                        <form action="index.php?controller=productes&action=guardar_Producte" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="csrftoken" value="ea49375f43c7e6a59c77df1e4de562b3f1350124eeb70e5d5124e4ce3b5251c2b4d12e9aaf2a3ddc618c178c8dc4620b">
                            <div class="form-group mb-3">
                                <label for="fname">Nom del Producte</label>
                                <input type="text" name="producte_nom" placeholder="Introdueix el nom del producte" class="form-control" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname">ID del Armari</label>
                                <input type="number" name="armari_id" placeholder="Introdueix el ID del armari" class="form-control" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname">Cantidad</label>
                                <input type="number" name="quantitat" placeholder="Introdueix la quantitat del producte" class="form-control" required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fname">Opción de Foto</label>
                                <div class="d-flex">
                                    <button class="btn btn-primary mr-2" onclick="capturePhoto()">Tomar Foto</button>
                                    <input type="file" name="foto" id="fileInput" class="form-control">
                                </div>
                            </div>

                            <!-- ... (tu código existente) ... -->
                            <br>
                            <div class="form-group mb-0 d-flex justify-content-between">
                                <button class="btn btn-primary btn-block" type="submit" name="submit" id="submit">Insertar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function capturePhoto() {
            const video = document.getElementById('cameraView');
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');

            // Configurar la resolución del canvas para que coincida con la del video
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;

            // Dibujar el video en el canvas
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            // Obtener la imagen en formato base64
            const capturedImageData = canvas.toDataURL('image/jpeg');

            // Mostrar la imagen en el campo de texto
            document.getElementById('capturedImage').src = capturedImageData;

            // Actualizar el campo oculto con los datos de la imagen
            document.getElementById('capturedImageData').value = capturedImageData;

            // Detener la reproducción del video
            video.pause();

            // Prevenir el envío predeterminado del formulario
            event.preventDefault();
        }

        // Agrega un listener al cambio del input de archivo
        document.getElementById('fileInput').addEventListener('change', function(e) {
            const fileInput = e.target;
            const file = fileInput.files[0];

            if (file) {
                // Mostrar la imagen seleccionada desde el dispositivo
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('capturedImage').src = e.target.result;
                    document.getElementById('capturedImageData').value = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

    <a href="index.php?controller=productes&action=mostrar_Productes"><button class="btn btn-outline-primary">Volver</button></a>
    <?php
    ?>

    <!-- Contenido termina -->
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>