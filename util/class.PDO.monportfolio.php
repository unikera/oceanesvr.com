<?php

class PdoFolio
{
    private static $serveur = 'mysql:host=db';
    private static $bdd = 'dbname=monportfolio';
    private static $user = 'root';
    private static $mdp = 'rootpassword';
    private static $monPdo;
    private static $monPdoFolio = null;

    private function __construct()
    {
        try {
            PdoFolio::$monPdo = new PDO(
                PdoFolio::$serveur . ';' . PdoFolio::$bdd,
                PdoFolio::$user,
                PdoFolio::$mdp
            );
            PdoFolio::$monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }

    public static function getPdoFolio()
    {
        if (PdoFolio::$monPdoFolio == null) {
            PdoFolio::$monPdoFolio = new PdoFolio();
        }
        return PdoFolio::$monPdoFolio;
    }

    public function getLesRealisations()
    {
        $req = "select * from realisations";
        $res = PdoFolio::$monPdo->prepare($req);
        $res->execute();

        $lesLignes = $res->fetchAll(PDO::FETCH_ASSOC);

        return $lesLignes;
    }

    public function getTexteLesRealisations($id)
    {
        $req = "SELECT * FROM realisations WHERE id = :id";
        $res = PdoFolio::$monPdo->prepare($req);
        $res->bindParam(':id', $id, PDO::PARAM_STR);
        $res->execute();
    
        $lesLignes = $res->fetchAll();
    
        return $lesLignes;
    }

    public function getLesCertifications()
    {
        $req = "SELECT * FROM certifications";
        $res = PdoFolio::$monPdo->prepare($req);
        $res->execute();

        $lesLignes = $res->fetchAll(PDO::FETCH_ASSOC);

        return $lesLignes;
    }

    public function getLesVeillesTech()
    {
        $req = "SELECT * FROM veilletech";
        $res = PdoFolio::$monPdo->prepare($req);
        $res->execute();

        $lesLignes = $res->fetchAll(PDO::FETCH_ASSOC);

        return $lesLignes;
    }

    
}