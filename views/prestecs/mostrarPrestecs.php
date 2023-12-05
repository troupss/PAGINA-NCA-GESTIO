<div class="container mt-5">
        <h1>Llistat de Prestecs</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>-</th>
                    <th>-</th>
                    <th>-</th>
                    <th>-</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($productes = $productes->fetch_object()) : ?>
                    <tr>
                        <td><?= $productes->producte_id ?></td>
                        <td><?= $productes->producte_nom ?></td>
                        <td><?= $productes->producte_armari_id ?></td>
                        <td><?= $productes->producte_quantitat ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="#"><button class="btn btn-outline-primary">Afegir llibres</button></a>
    </div>