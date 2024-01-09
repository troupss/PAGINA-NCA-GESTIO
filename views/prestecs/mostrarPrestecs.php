<div class="container mt-5">
    <h1>Llistat de Prestecs</h1>
<<<<<<< HEAD
    <div class="table-responsive">
        <table id = "myTable" class="table table-bordered">
            <thead>
=======
    <table id="myTable" class="table table-bordered">
        <thead>
            <tr>
                <th>Prestec Id</th>
                <th>Nom del Producte</th>
                <th>Producte Id</th>
                <th>Quantitat del Producte</th>
                <th>Nom del Destinatari</th>
                <th>Opcions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($prestecs = $prestec->fetch_object()) : ?>
>>>>>>> fc8dc79c6a0510f77df20046c464a51b4a7dbd9f
                <tr>
                    <th>Prestec Id</th>
                    <th>Nom del Producte</th>
                    <th>Producte Id</th>
                    <th>Quantitat del Producte</th>
                    <th>Nom del Destinatari</th>
                    <th>Opcions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($prestecs = $prestec->fetch_object()) : ?>
                    <tr>
                        <td><?= $prestecs->prestecs_id ?></td>
                        <td><?= $prestecs->prestecs_nom_producte ?></td>
                        <td><?= $prestecs->prestecs_producte_id ?></td>
                        <td><?= $prestecs->prestecs_quantitat ?></td>
                        <td><?= $prestecs->prestecs_nom_destinatari ?></td>
                        <td>
                            <a href="index.php?controller=prestecs&action=actualitzarPrestec&id=<?= $prestecs->prestecs_id ?>"><button class="btn btn-outline-primary">Actualitzar</button></a> &nbsp;
                            <a href="index.php?controller=prestecs&action=EsborrarPrestec&id=<?= $prestecs->prestecs_id ?>"><button class="btn btn-outline-primary">Retornat</button></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Prestec Id</th>
                    <th>Nom del Producte</th>
                    <th>Producte Id</th>
                    <th>Quantitat del Producte</th>
                    <th>Nom del Destinatari</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

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

<a href="index.php?controller=prestecs&action=afegir_Prestecs"><button class="btn btn-outline-primary">Afegir prestec</button></a>