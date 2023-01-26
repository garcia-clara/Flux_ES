<?php include('../model/model.php') ?>

<?php

class controller
{
    private $pdo;
    private $model;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=flux_es", "root", "");
        $this->model = new model();
    }

    public function insertUtilisateur($data)
    {
        $this->model->insertUtilisateur($data);
    }
}

?>