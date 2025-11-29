<?php
require_once "../../model/CRUD_Produit.php";
if (isset($_POST['ok'])) {
    //recupérer les données par post
    $lib = htmlspecialchars($_POST['lib']);
    $pu = htmlspecialchars($_POST['pu']);
    $qte = htmlspecialchars($_POST['qte']);
    $image = htmlspecialchars($_POST['image']);
    $des = htmlspecialchars($_POST['des']);
    if (isset($_POST['promo']))
        $promo = htmlspecialchars($_POST['promo']);
    else $promo = 0;
    //construire l'objet $obj du produit
    $obj = new Produit(null, $lib, $pu, $qte, $image, $des, $promo);
    //  appel au model : crud->add($obj)
    $crud = new CRUD_Produit();
    $res = $crud->add($obj);
    // redirecttion vers controller/produit/findAll.php 
    if ($res) {
        header("location:../../controller/produit/findAll.php");
        exit;
    }
}

// si $_POST n'existe pas = formulaire n'est pas encore affiché
//-> demande d'affichage à la vue add.php d'afficher un formulaire d'ajout
include "../../view/produit/add.php";
