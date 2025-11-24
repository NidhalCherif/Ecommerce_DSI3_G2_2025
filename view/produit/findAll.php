<?php
ob_start();
?>
<div class="text-end">
    <a href="../../controller/produit/add.php" class="btn btn-success">Ajouter un nouveau produit</a>
</div>
<table id="example" class="table display">
    <thead>
        <tr>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>En Promo</th>
            <th colspan=3>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($LesProduits as $produit) {
        ?>

            <tr>
                <td><?= $produit[1] ?></td>
                <td><?= $produit[2] ?></td>
                <td><?= $produit[3] ?></td>
                <td><?= $produit[6] ?></td>
                <td><a href="../../controller/produit/find.php?id=<?= $produit[0] ?>">Voir détail...</a></td>
                <td><a href="../../controller/produit/delete.php?id=<?= $produit[0] ?>">Supprimer</a></td>
                <td><a href="../../controller/produit/update.php?id=<?= $produit[0] ?>">Editer</a></td>
            </tr>

        <?php  }
        ?>
    </tbody>
</table>



<?php
$contenu = ob_get_clean();
$titre = "Liste des produits";
include "../../view/layout.php";
