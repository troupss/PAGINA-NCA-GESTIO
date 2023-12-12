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

    <title>Productes</title>
</head>

<body>
    <!--content start-->
    <div class="container mt-5">
        <h1>Llistat de Productes</h1>
        <table id="myTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Producte ID</th>
                    <th>Producte Nom</th>
                    <th>Armari ID</th>
                    <th>Quantitat</th>
                    <th>Foto</th>
                    <th>Opcions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($productes = $producte->fetch_object()) : ?>
                    <tr>
                        <td><?= $productes->producte_id ?></td>
                        <td><?= $productes->producte_nom ?></td>
                        <td><?= $productes->producte_armari_id ?></td>
                        <td><?= $productes->producte_quantitat ?></td>
                        <td><img src="img/<?= $productes->foto ?>" alt="" width="100px"></td>
                        <td>
                            <a href="index.php?controller=productes&action=actualitzar_Producte&id=<?= $productes->producte_id ?>"><button class="btn btn-outline-primary">Actualitzar</button></a> &nbsp;

                            <a href="index.php?controller=productes&action=EsborrarProducte&id=<?= $productes->producte_id ?>"><button class="btn btn-outline-primary">Eliminar</button></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Producte ID</th>
                    <th>Producte Nom</th>
                    <th>Armari ID</th>
                    <th>Quantitat</th>
                </tr>
            </tfoot>
        </table>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });

            new DataTable('#myTable', {
                initComplete: function() {
                    this.api()
                        .columns()
                        .every(function() {
                            let column = this;

                            // Create select element
                            let select = document.createElement('select');
                            select.add(new Option(''));
                            column.footer().replaceChildren(select);

                            // Apply listener for user change in value
                            select.addEventListener('change', function() {
                                var val = DataTable.util.escapeRegex(select.value);

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                            // Add list of options
                            column
                                .data()
                                .unique()
                                .sort()
                                .each(function(d, j) {
                                    select.add(new Option(d));
                                });
                        });
                }
            });
        </script>
        <a href="index.php?controller=productes&action=afegir_Producte"><button class="btn btn-outline-primary">Afegir Productes</button></a>

        <!--content end-->
        <!-- JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>