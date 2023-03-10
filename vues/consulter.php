<?php include('../controller/controller.php') ?>
<?php include('../components/navbar.php') ?>

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
    <!-- <meta http-equiv="refresh" content="10"> -->
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
                    // on récupère tous nos users
                    $controller = new controller();
                    $users = $controller->model->showUtilisateur();
                    ?>

                    <!-- Controler si $users est vide -->
                    <?php if (count($users) === 0) : ?>
                        <div class="flex items-center justify-center">
                            <p class="text-xl m-24">Aucun utilisateur en attente</p>
                        </div>
                    <?php endif; ?>
                    <!-- Controler si $users est vide -->

                    <table class="table w-full shadow">
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
                            <!-- foreach des users -->
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <th><?= $user['cuid'] ?></th>
                                    <td>
                                        <?= $user['prenom'] ?>
                                        <?= $user['nom'] ?>
                                    </td>
                                    <td><?= $user['motif'] ?></td>
                                    <td><?= $user['numero'] ?></td>
                                    <td><?= $user['heure'] ?></td>
                                    <td><?= $user['commentaire'] ?></td>
                                    <td>
                                        <!-- Si notre user n'est pas pris en charge -->
                                        <?php if ($user['prisencharge'] === '') : ?>
                                            <form action="#" method="POST">
                                                <button type="submit" class="btn btn-accent" name="prisencharge">Prendre en charge</button>
                                                <input type='text' hidden name='id' value="<?= $user['id'] ?>">
                                            </form>
                                            <!-- Si notre user est pris en charge -->
                                        <?php else : ?>
                                            <!-- Si notre user EST pris en charge -->
                                            <form action="#" method="POST">
                                                <?php

                                                if ($user['prisencharge'] === $_SESSION['prenom']) { ?>
                                                    <form action="#" method="POST">
                                                        <button class="btn gap-2 btn-primary" type="submit" name="retirerprisencharge">
                                                        <input type='text' hidden name='id' value="<?= $user['id'] ?>">

                                                            <?php
                                                            $tspname = $controller->model->getTspName($user['id']);
                                                            echo $tspname['prisencharge'];
                                                            ?>
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </form>

                                                <?php } else { ?>

                                                    <button class="btn gap-2 btn-secondary">
                                                        <?php
                                                        $tspname = $controller->model->getTspName($user['id']);
                                                        echo $tspname['prisencharge'];
                                                        ?>
                                                    </button>

                                                <?php } ?>



                                                </button>

                                                <input type='text' hidden name='id' value="<?= $user['id'] ?>">
                                            </form>
                                            <!-- Si notre user EST pris en charge -->
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <!-- foreach des users -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
// traitement du formaulaire de prise en charge
if (isset($_POST['prisencharge'])) {
    $controller->takeUtilisateur($_SESSION['prenom'], $_POST['id']);
    // redirection sur la même page sans le renvoie de formulaire car ça fait tout bug
    header('Location: consulter.php');
}

if (isset($_POST['retirerprisencharge'])) {
    $controller->undoTakeUtilisateur($_POST['id']);
    // redirection sur la même page sans le renvoie de formulaire car ça fait tout bug
    header('Location: consulter.php');
}
