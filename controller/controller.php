<?php
session_start();
include('../model/model.php');

class controller
{
    private $pdo;
    public $model;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=flux_es", "root", "");
        $this->model = new model();
    }

    public function insertUtilisateur($data)
    {
        $f = $this->model->insertUtilisateur($data);
        if ($f) {
            header("Location:../vues/ajouter.php?success");
        } else {
            header("Location:../vues/ajouter.php?error");
        }
    }

    public function showUtilisateur()
    {
        $this->model->showUtilisateur();
    }

    public function takeUtilisateur($id)
    {
        $this->model->takeUtilisateur($id);
    }

    public function countUtilisateur()
    {
        $this->model->countUtilisateur();
    }

    public function countMotif($motif)
    {
        $this->model->countMotif($motif);
    }

    public function inscription($data)
    {
        $this->model->inscription($data);
    }

    public function findNameById($cuid)
    {
        $this->model->findNameById($cuid);
    }

    public function connexion($cuid, $mdp)
    {
        $potential_user = $this->model->findById($cuid);

        // on controle si on a un user
        if (!$potential_user) {
            header('Location: ../vues/connexion.php?status=error');
        }

        // on controle maintenant le mot de passe
        $mdp_tsp = $this->pdo->query("SELECT * FROM tsp WHERE mdp = '$mdp'")->fetch();

        if (!$mdp_tsp) {
            header('Location: ../vues/connexion.php?status=error');
        }

        // si on arrive la, c'est que notre user est bon alors
        // on set les variables de session
        $_SESSION['cuid'] = $potential_user['cuid'];
        $_SESSION['prenom'] = $potential_user['prenom'];

        return  header('Location: ../vues/statistiques.php');
    }
}
