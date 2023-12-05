<div class="container">
        <div class="titulo">Actualitzar Usuaris</div>
        <form class="form-control" action="index.php?controller=prestecs&action=actualitzar" method="post">
            <?php 
            @session_start();
 
                echo '<input type="hidden" name="id" value="' . $row['id'] . '">';

                echo '<label for="prestecs_nom_producte">prestecs_nom_producte:</label>';
                echo '<input class="form-control" type="text" name="prestecs_nom_producte" id="prestecs_nom_producte" value="' . $row['prestecs_nom_producte'] . '" required>';

                echo '<label for="prestecs_producte_id">prestecs_producte_id:</label>';
                echo '<input class="form-control" type="text" name="prestecs_producte_id" id="prestecs_producte_id" value="' . $row['prestecs_producte_id'] . '" required>';

                echo '<label for="prestecs_quantitat">prestecs_quantitat:</label>';
                echo '<input class="form-control" type="prestecs_quantitat" name="prestecs_quantitat" id="prestecs_quantitat" value="' . $row['prestecs_quantitat'] . '" required>';

                echo '<label for="prestecs_nom_destinatari">prestecs_nom_destinatari:</label>';
                echo '<input class="form-control" type="text" name="prestecs_nom_destinatari" id="prestecs_nom_destinatari" value="' . $row['prestecs_nom_destinatari'] . '" required>';

                echo '<br><br><input class="btn btn-primary" type="submit" value="Actualitzar">';
            
            ?>
        </form>
    </div>