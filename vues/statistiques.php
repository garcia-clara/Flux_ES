<?php include('../components/navbar.php') ?>
<?php include('../controller/controller.php') ?>

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

            <div class="grid grid-cols-2 gap-4 h-fit m-4">

                <div class="stats shadow h-32 min-w-fit">
                    <div class="stat">
                        <div class="stat-title">Total d'utilisateurs pris en charge par l'équipe</div>
                        <div class="">
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

            <div class="grid row-start-2 col-start-1 col-end-2">

                <div class="flex flex-wrap gap-4 w-fit m-4">

                    <div class="stats shadow">

                        <div class="stat min-w-fit w-80">
                            <div class="stat-title text-2xl font-bold">Clara GARCIA</div>
                            <div class="radial-progress text-primary mt-4" style="--value:70; --size:9em">70%</div>
                        </div>
                    </div>

                    <div class="stats shadow">
                        <div class="stat min-w-fit w-80">
                            <div class="stat-title text-2xl font-bold">Romain RINVILLE</div>
                            <div class="radial-progress text-primary mt-4" style="--value:70; --size:9em">70%</div>
                        </div>
                    </div>

                    <div class="stats shadow">
                        <div class="stat min-w-fit w-80">
                            <div class="stat-title text-2xl font-bold">Malik AMOUR</div>
                            <div class="radial-progress text-primary mt-4" style="--value:70; --size:9em">70%</div>
                        </div>

                    </div>


                </div>

            </div>

        </div>



</body>

</html>