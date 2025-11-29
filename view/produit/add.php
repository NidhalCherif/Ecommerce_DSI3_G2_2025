<?php

ob_start();
?>

<form action="../../controller/produit/add.php" method="post">
    <input type="text" name="lib" id="" placeholder="Libellé" class="form-control">
    <input type="text" name="pu" id="" placeholder="prix" class="form-control">
    <input type="text" name="qte" placeholder="Quantité" id="" class="form-control">
    <textarea name="des" class="form-control" placeholder="Description de produit" id=""></textarea>
    <input type="text" placeholder="lien de l'image" name="image" id="" class="form-control">
    <input type="checkbox" value=1 name="pro" id="">En promo <br>
    <input type="submit" class="btn btn-primary" name="ok" value="Ajouter">

</form>


<?php
$contenu = ob_get_clean();
$titre = "Ajout d'u nouveau produit";
include "../../view/layout.php";
