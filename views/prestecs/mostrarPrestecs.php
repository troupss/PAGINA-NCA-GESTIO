<div class="container mt-5">
        <h1>Llistat de Prestecs</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Prestec Id</th>
                    <th>Nom del Producte</th>
                    <th>Producte Id</th>
                    <th>Quantitat del Producte</th>
                    <th>Nom del Destinatari</th>
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
                        <td><a href="index.php?controller=prestecs&action=actualizar&id=<?= $prestecs->pretecs_id ?>">Actualitzar</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="index.php?controller=prestecs&action=afegir_Prestecs"><button class="btn btn-outline-primary">Afegir prestec</button></a>
    </div>