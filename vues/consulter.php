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
    <title>ESPACE TSP - Consulter les utilisateurs</title>
</head>

<body>

    <div class="grid grid-cols-6 h-screen">

        <?php include('../components/menu.php') ?>

        <div class="col-start-2 col-end-7">

            <div class="my-12 ml-12 text-3xl font-bold flex items-center">
                <i class="bi bi-people-fill text-6xl"></i>
                <p class="ml-4">CONSULTER LES UTILISATEURS EN ATTENTE</p>
            </div>

            <div class="w-10/12 rounded-lg ml-8">

                <div class="overflow-x-auto m-4">

                <?php 
                    $controller = new controller;
                    $allUtilisateurs = $controller->model->showUtilisateur();

                    if(empty($allUtilisateurs)){ ?>

                        <div class="flex items-center justify-center">
                            <p class="text-xl m-24">Aucun utilisateur en attente</p>
                        </div>

                    <?php } else { ?>

                    <table class="table w-full border">

                        <!-- head -->
                        <thead>
                            <tr>
                                <th>CU-ID</th>
                                <th>Nom</th>
                                <th>Motif</th>
                                <th>Numéro</th>
                                <th>Heure d'arrivée</th>
                                <th>Commentaire</th>
                                <th>Prise en charge</th>
                            </tr>
                        </thead>
                        <tbody>

                        <!-- rows -->

                    <?php foreach($allUtilisateurs as $unUtilisateur){ ?>

                            <tr>
                                <th><?php echo $unUtilisateur['cuid'] ?></th>
                                <td><?php echo $unUtilisateur['prenom']; $unUtilisateur['nom'] ?></td>
                                <td><?php echo $unUtilisateur['motif'] ?></td>
                                <td><?php echo $unUtilisateur['numero'] ?></td>
                                <td><?php echo $unUtilisateur['heure'] ?></td>
                                <td><?php echo $unUtilisateur['commentaire'] ?></td>
                                <td>
                                <?php
                                    if (!isset($_POST['prisencharge'])){ ?>
                                        <form action="" method="POST">
                                        <button type="submit" class="btn btn-accent" name="prisencharge">Prendre en charge</button>
                                        </form> 
                                        <?php } else {
                                        $controller->model->takeUtilisateur(13);
                                        ?> <div class="badge badge-primary badge-outline">Romain RINVILLE</div> <?php
                                    }
                                ?>
                                </td>
                            </tr>
                        
                <?php }} ?>
                        </tbody>
                    </table>
                    


                </div>

            </div>

        </div>
    </div>



</body>

</html>