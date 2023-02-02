<?php include('../model/model.php') ?>

<?php

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
        if($f){
            header("Location:../vues/ajouter.php?success");
        } else {
            header("Location:../vues/ajouter.php?error");
        }
    }

    public function showUtilisateur(){
        $this->model->showUtilisateur;
    }

    public function takeUtilisateur(){
        $this->model->takeUtilisateur;
    }

    public function countUtilisateur(){
        $this->model->countUtilisateur;
    }

    public function countMotif($motif){
        $this->model->countMotif($motif);
    }

    public function inscription($data){
        $f = $this->model->inscription($data);

        if($f){
            header("Location:../vues/connexion.php?signup-success");
        } else {
            header("Location:../vues/inscription.php?signup-error");
        }
    }

    public function findNameById($cuid){
        $this->model->findNameById($cuid);
    }

    public function connexion($cuid, $mdp)
    {
        $allTsp = $this->model->get_all('tsp');
        $prenom = $this->model->findNameById($cuid);

        foreach ($allTsp as $tsp) {
            if ($tsp['cuid'] === $cuid) {

                if ($tsp['mdp'] === $mdp) {

                    $_SESSION['cuid'] = $tsp['cuid'];
                    $_SESSION['mdp'] = $tsp['mdp'];
                    $_SESSION['prenom'] = $prenom;
                    header('Location: ../vues/statistiques.php');
                } 
            } else {
                header('Location: ../vues/connexion.php?signin-error');
            }
        }


    }

}




?>