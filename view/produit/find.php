<?php
ob_start();
?>
<div class="row">
    <div class="col-4">
        <img src="<?= $produit[4] ?>" alt="photo">
    </div>
    <div class="col">
        <h3><?= $produit[1] ?> (<?= $produit[3] ?> DT)</h3>
        <em><?= $produit[5] ?></em>
        <h4>Quantité: <?= $produit[2] ?></h4>


    </div>

</div>



<?php
$contenu = ob_get_clean();
$titre = "Détail du produit";
include "../../view/layout.php";
