<div class="container mt-5">
        <h1>Llistat de Prestecs</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id del Producte</th>
                    <th>Nom del Producte</th>
                    <th>Armari Id</th>
                    <th>Quantitat del Producte</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($prestecs = $prestecs->fetch_object()) : ?>
                    <tr>
                        <td><?= $prestecs->prestecs_id ?></td>
                        <td><?= $prestecs->prestecs_nom_producte ?></td>
                        <td><?= $prestecs->prestecs_producte_id ?></td>
                        <td><?= $prestecs->prestecs_quantitat ?></td>
                        <td><?= $prestecs->prestecs_nom_destinatari ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="#"><button class="btn btn-outline-primary">Afegir llibres</button></a>
    </div>