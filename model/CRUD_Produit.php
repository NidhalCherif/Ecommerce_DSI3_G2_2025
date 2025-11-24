<?php
require_once "../../connexion.php";
include "produit.php";
class CRUD_Produit
{
    private $pdo;
    function __construct()
    {
        $con = new connexion();
        $this->pdo = $con->getConnexion();
    }
    function findAll()
    {
        $sql = "select * from produit";
        $res = $this->pdo->query($sql); //$res est un objet PDOstatement
        return $res->fetchAll(PDO::FETCH_NUM); //array php
    }
    function find($id)
    {
        $sql = "select * from produit where id=" . $id;
        $res = $this->pdo->query($sql); //$res est un objet PDOstatement
        return $res->fetch(PDO::FETCH_NUM); //produit:array
    }
    function delete($id)
    {
        $sql = "delete from produit where id=" . $id;
        return $this->pdo->exec($sql);
    }
    function add(Produit $produit)
    {

        $lib = $produit->getLibelle();
        $pu = $produit->getPrix();
        $qte = $produit->getQuantite();
        $image = $produit->getImage();
        $promo = $produit->getPromo();
        $des = $produit->getDescription();
        $sql = "insert into produit 
                 values(null,'$lib',$pu,$qte,'$image','$des',$promo)";
        return $this->pdo->exec($sql); // le nombre de lignes insérées
    }

    function update(Produit $produit)
    {
        $id = $produit->getId();
        $lib = $produit->getLibelle();
        $pu = $produit->getPrix();
        $qte = $produit->getQuantite();
        $image = $produit->getImage();
        $promo = $produit->getPromo();
        $des = $produit->getDescription();
        $sql = "update produit set 
        libelle='$lib',prix=$pu,quantite=$qte,image='$image',description='$des',promo=$promo
        where id=$id";
        return $this->pdo->exec($sql); // le nombre de lignes modifiées
    }
}
