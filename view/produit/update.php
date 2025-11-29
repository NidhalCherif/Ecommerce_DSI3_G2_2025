<?php
ob_start();
?>
<form action="../../controller/produit/update.php" method="post">
    <input type="text" name="id" id="" value="<?= $produit[0] ?>" readonly class="form-control">
    <input type="text" value="<?= $produit[1] ?>" "Libellé" name="lib" id="" class="form-control">
    <input type="text" placeholder="Prix" value="<?= $produit[2] ?>" name="pu" id="" class="form-control">
    <input type="text" placeholder="Quantité" value="<?= $produit[3] ?>" name="qte" id="" class="form-control">
    <input type="text" placeholder="Votre image" name="image" value="<?= $produit[4] ?>" id="" class="form-control">
    <textarea name="des" placeholder="Description du produit" id="" class="form-control"><?= $produit[5] ?></textarea>
    <?php if ($produit[6] == 1) { ?>
        <input type="checkbox" checked name="promo" value=1 id="">En promo <br>
    <?php
    } else { ?>
        <input type="checkbox" name="promo" value=1 id="">En promo <br>
    <?php
    }

    ?>
    <input type="submit" class="btn btn-primary" name="ok" value="Editer" name="ok">
</form>



<?php
$titre = "Ajout d'un nouveau Produit";
$contenu = ob_get_clean();
include "../../view/layout.php";
?>