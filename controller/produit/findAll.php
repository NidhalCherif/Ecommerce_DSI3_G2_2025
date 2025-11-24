<?php
require_once "../../model/CRUD_Produit.php";
$crud = new CRUD_Produit();
$LesProduits = $crud->findAll();
include "../../view/produit/findAll.php";
