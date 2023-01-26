<?php

class model{
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=flux_es", "root", "");
    }

    public function insertUtilisateur($data){
        $sql = "INSERT INTO utilisateurs VALUES (null, :prenom, :nom, :cu-id, :heure, :motif, :numero, :commentaire)";

        $query = $this->pdo->prepare($sql);

        $utilisateur = array(
            ":prenom" => htmlspecialchars($data['prenom']),
            ":nom" => htmlspecialchars($data['nom']),
            ":cu-id" => htmlspecialchars($data['cu-id']),
            ":heure" => htmlspecialchars($data['heure']),
            ":motif" => htmlspecialchars($data['motif']),
            ":numero" => htmlspecialchars($data['numero']),
            ":commentaire" => htmlspecialchars($data['commentaire'])
        );

        $query->execute($utilisateur);

    }
}

?>