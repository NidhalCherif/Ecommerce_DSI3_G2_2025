<?php
require_once "../../model/CRUD_Produit.php";
$crud = new CRUD_Produit();
$id = $_GET['id'];
$produit = $crud->find($id);
include "../../view/produit/find.php";
