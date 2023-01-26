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

                <div class="overflow-x-auto m-4 border rounded-md">
                    <table class="table w-full">
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
                            <!-- row 1 -->
                            <tr>
                                <th>CYGP3115</th>
                                <td>Clara GARCIA</td>
                                <td>Incident</td>
                                <td>INC000094367</td>
                                <td>14:27</td>
                                <td>Clavier HS</td>
                                <td><button class="btn btn-accent">Prendre en charge</button></td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                                <th>OVDK9473</th>
                                <td>Tom LAU</td>
                                <td>DMI</td>
                                <td>DMI00047283</td>
                                <td>09:34</td>
                                <td>Demande de chargeur</td>
                                <td>Salim ALARCON</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>



</body>

</html>