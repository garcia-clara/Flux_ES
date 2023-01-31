<?php

class model{
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=flux_es", "root", "");
    }

    public function get_all($table)
    {
        $sql = "select * from $table";
        return $this->pdo->query($sql)->fetchAll();

    }

    public function insertUtilisateur($data)
    {
        // Etape 1 : Créer la requete SQL (insert)
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

        // Etape 2 : Créer le tableau de contrainte

        $data = array(
        ":prenom" => htmlspecialchars($data['prenom']),
        ":nom" => htmlspecialchars($data['nom']),
        ":cuid" => htmlspecialchars($data['cu-id']),
        ":heure" => htmlspecialchars($data['heure']),
        ":motif" => htmlspecialchars($data['motif']),
        ":numero" => htmlspecialchars($data['numero']),
        ":commentaire" => htmlspecialchars($data['commentaire']),
        );

        // Etape 3 : Exécuter le tableau de contrainte (execute)
        $p->execute($data);
        }

    public function showUtilisateur(){
        $sql="SELECT * FROM utilisateurs";
        return $this->pdo->query($sql)->fetchAll();
    }

    public function takeUtilisateur($id){
        $sql="UPDATE utilisateurs SET prisencharge = 1 WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
    }

    public function countUtilisateur(){
        $sql="SELECT COUNT(prisencharge) FROM utilisateurs WHERE prisencharge = 1";
        return $this->pdo->query($sql)->fetch();
    }

    public function countMotif($motif){
        $sql="SELECT COUNT(motif) FROM utilisateurs WHERE motif = '?' ";
        return $this->pdo->query($sql)->fetch();
    }

    //--------------- INSCRIPTION

    public function inscription($data){
        $sql="INSERT INTO tsp 
        VALUES( 
            null,
            :cuid,
            :prenom,
            :nom,
            :mdp
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
    


    
}
?>