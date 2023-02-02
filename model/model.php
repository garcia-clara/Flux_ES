<?php

class model
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=flux_es", "root", "");
    }

    public function get_all($table)
    {
        $sql = "select * from $table";
        return $this->pdo->query($sql)->fetchAll();
    }

    public function insertUtilisateur($data)
    {
        $sql = "INSERT INTO utilisateurs 
        VALUES(
            null, 
            :prenom,
            :nom, 
            :cuid,
            :heure,
            :motif,
            :numero,
            :commentaire,
            0
        )";

        $p = $this->pdo->prepare($sql);

        $data = array(
            ":prenom" => htmlspecialchars($data['prenom']),
            ":nom" => htmlspecialchars($data['nom']),
            ":cuid" => htmlspecialchars($data['cu-id']),
            ":heure" => htmlspecialchars($data['heure']),
            ":motif" => htmlspecialchars($data['motif']),
            ":numero" => htmlspecialchars($data['numero']),
            ":commentaire" => htmlspecialchars($data['commentaire']),
        );

        $p->execute($data);
    }

    public function showUtilisateur()
    {
        $sql = "SELECT * FROM utilisateurs";
        return $this->pdo->query($sql)->fetchAll();
    }

    public function takeUtilisateur($id)
    {
        $sql1 = 'UPDATE utilisateurs SET prisencharge = 1 WHERE id = "' . $id . '"';
        $sql2 = 'UPDATE tsp SET nbutilisateurs = nbutilisateurs + 1 WHERE id = "' . $id . '"';

        $stmt = $this->pdo->prepare($sql1);
        $stmt = $this->pdo->prepare($sql2);
    }

    public function countUtilisateur()
    {
        $sql = "SELECT COUNT(prisencharge) FROM utilisateurs WHERE prisencharge = 1";
        return $this->pdo->query($sql)->fetch();
    }

    public function countMotif($motif)
    {
        $sql = 'SELECT COUNT(motif) FROM utilisateurs WHERE motif ="' . $motif . '"';

        return $this->pdo->query($sql)->fetch();
    }

    //--------------- INSCRIPTION

    public function inscription($data)
    {
        $sql = "INSERT INTO tsp 
        VALUES( 
            null,
            :cuid,
            :prenom,
            :nom,
            :mdp,
            0
        )";

        $p = $this->pdo->prepare($sql);

        $data = array(
            ":cuid" => htmlspecialchars($data['cuidtsp']),
            ":prenom" => htmlspecialchars($data['prenomtsp']),
            ":nom" => htmlspecialchars($data['nomtsp']),
            ":mdp" => htmlspecialchars($data['mdptsp'])
        );

        $p->execute($data);
    }

    // un peu useless pour se connecter
    public function findNameById($cuid)
    {
        $sql = 'SELECT prenom FROM tsp WHERE cuid = "' . $cuid . '"';
        return $this->pdo->query($sql)->fetch();
    }

    // plutot ça
    public function findById($cuid)
    {
        return $this->pdo->query("SELECT * FROM tsp WHERE cuid = $cuid")->fetch();
    }
}
