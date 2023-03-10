<?php
include('../controller/controller.php');
include('../components/navbar.php');
?>

<!DOCTYPE html>
<html data-theme="emerald" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.45.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>ESPACE TSP - Statistiques</title>
</head>

<body>

    <div class="grid grid-cols-6 h-screen">

        <?php include('../components/menu.php') ?>

        <div class="col-start-2 col-end-7">

            <div class="my-12 ml-12 text-3xl font-bold flex items-center">
                <i class="bi bi-bar-chart-line-fill text-6xl"></i>
                <p class="ml-4">STATISTIQUES</p>
            </div>

            <div class="flex gap-4 h-fit m-4">

                <div class="stats shadow h-32 w-auto">
                    <div class="stat">
                        <div class="stat-title">Total d'utilisateurs pris en charge par l'équipe</div>
                        <div>
                            <div class="stat-value">

                                <?php
                                $controller = new controller;
                                $usersNumbers = $controller->model->countUtilisateur();
                                echo $usersNumbers[0];
                                ?>

                            </div>
                            <div class="stat-desc">Aujourd'hui</div>
                        </div>
                    </div>
                </div>


                <div>
                    <div class="stats shadow h-32">

                        <div class="stat w-36">
                            <div class="stat-title">DMI</div>
                            <div class="stat-value">
                                <?php
                                $usersDMI = $controller->model->countMotif("DMI");
                                echo $usersDMI[0];
                                ?>
                            </div>
                        </div>

                        <div class="stat w-36">
                            <div class="stat-title">Incident</div>
                            <div class="stat-value">
                                <?php
                                $usersIncident = $controller->model->countMotif("Incident");
                                echo $usersIncident[0];
                                ?>
                            </div>
                        </div>

                        <div class="stat w-36">
                            <div class="stat-title">ROADMAP</div>
                            <div class="stat-value">
                                <?php
                                $usersRoadmap = $controller->model->countMotif("ROADMAP");
                                echo $usersRoadmap[0];
                                ?>
                            </div>
                        </div>

                        <div class="stat w-36">
                            <div class="stat-title">PILAF</div>
                            <div class="stat-value">
                                <?php
                                $usersPilaf = $controller->model->countMotif("PILAF");
                                echo $usersPilaf[0];
                                ?>
                            </div>
                        </div>

                        <div class="stat w-36">
                            <div class="stat-title">Autre</div>
                            <div class="stat-value">
                                <?php
                                $usersAutre = $controller->model->countMotif("Autre");
                                echo $usersAutre[0];
                                ?>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

                <div class="gap-4 w-fit m-4">

                    <div class="flex flex-wrap stats shadow">

                        <?php

                        $allTsp = $controller->model->get_all('tsp');

                        foreach ($allTsp as $Tsp) {
                        ?>

                            <div class="stat w-auto">
                                <div class="stat-title text-2xl font-bold"><?= $Tsp['prenom'] ?></div>

                                    <?php $usersencharge = $controller->model->userPercentage($Tsp['cuid']);
                                    
                                    $percentage = $controller->model->cal_percentage($Tsp['nbutilisateurs'], $usersNumbers[0]);
                                ?>

                                <div class="radial-progress text-primary mt-4" style="--value:<?= $percentage ?>; --size:9em"><?= $percentage ?> % </div>
                            </div>

                        <?php } ?>

                    </div>


                </div>




</body>

</html>