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
        $e = $this->model->insertUtilisateur($data);
        if($e){
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
}

?>