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

    public function getTspName($id){
        $sql = "SELECT prisencharge FROM utilisateurs WHERE id= $id";
        return $this->pdo->query($sql)->fetch();
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
            ''
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

    public function takeUtilisateur($name, $id)
    {
        // correspond à la personne connecté
        $idUser = $_SESSION['cuid'];

        // requête
        $sql1 = "UPDATE utilisateurs SET prisencharge = '$name' WHERE id = $id";
        $sql2 = "UPDATE tsp SET nbutilisateurs = nbutilisateurs + 1 WHERE cuid = $idUser";

        $this->pdo->prepare($sql1)->execute();
        $this->pdo->prepare($sql2)->execute();
    }

    public function undoTakeUtilisateur($id)
    {
        // correspond à la personne connecté
        $idUser = $_SESSION['cuid'];

        // requête
        $sql1 = "UPDATE utilisateurs SET prisencharge = '' WHERE id = $id";
        $sql2 = "UPDATE tsp SET nbutilisateurs = nbutilisateurs - 1 WHERE cuid = $idUser";

        $this->pdo->prepare($sql1)->execute();
        $this->pdo->prepare($sql2)->execute();
    }

    public function countUtilisateur()
    {
        $sql = "SELECT COUNT(prisencharge) FROM utilisateurs WHERE prisencharge != ''";
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

    public function userPercentage($cuid){

        $sql = "SELECT nbutilisateurs FROM tsp WHERE cuid = '$cuid'";

        return $this->pdo->query($sql)->fetchAll();
    }

    function cal_percentage($num_amount, $num_total)
    {
        $count1 = $num_amount / $num_total;
        $count2 = $count1 * 100;
        $count = number_format($count2, 0);
        return $count;
    }

}
