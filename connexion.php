<?php
class Connexion
{

    private $connexion; // objet PDO
    function __construct()
    {
        try {
            $dsn = "mysql:host=localhost;dbname=e_commerce";
            $username = "root";
            $password = "";
            $this->connexion = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            echo "Problème de connexion !!!!! <br> Erreur : " . $e->getMessage();
        }
    }

    /**
     * Get the value of connexion
     */
    public function getConnexion()
    {
        return $this->connexion;
    }
}
