<?php
require_once "../../model/CRUD_Produit.php";
$crud = new CRUD_Produit();
$id = $_GET['id'];
$res = $crud->delete($id);
if ($res) {
    header("location:../../controller/produit/findAll.php");
    exit;
}
