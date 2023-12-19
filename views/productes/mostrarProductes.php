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
                    <th>Archivar</th>
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
                            <a href="index.php?controller=productes&action=archivarProducte&id=<?= $productes->producte_id ?>"><button class="btn btn-outline-primary">Archivar</button></a>
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