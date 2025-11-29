<?php
require_once "../../model/CRUD_Produit.php";
$crud = new CRUD_Produit();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produit = $crud->find($id); //array numerique
    include "../../view/produit/update.php";
}
if (isset($_POST['ok'])) {
    //var_dump($_POST);
    $id = $_POST['id'];
    $lib = htmlspecialchars($_POST['lib']);
    $pu = htmlspecialchars($_POST['pu']);
    $qte = htmlspecialchars($_POST['qte']);
    $image = htmlspecialchars($_POST['image']);
    $des = htmlspecialchars($_POST['des']);
    if (isset($_POST['promo']))
        $promo = 1;
    else $promo = 0;
    $obj = new Produit($id, $lib, $pu, $qte, $image, $des, $promo);
    $crud->update($obj);
    header("location:../../controller/produit/findAll.php");
    exit;
}
