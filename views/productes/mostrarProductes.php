
    <div class="container mt-5">
        <h1>Llistat de Productes</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Producte ID</th>
                    <th>Producte Nom</th>
                    <th>Armari ID</th>
                    <th>Quantitat</th>
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
