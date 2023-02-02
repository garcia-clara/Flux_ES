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
  <title>ESPACE TSP - Connexion</title>
</head>

<body>

  <div class="grid grid-cols-3 h-screen">

    <div></div>

    <div class="mt-24">
      <h1 class='mb-2 text-green-600 text-xl'>
        <?= isset($_GET['status']) ? 'Veuillez vous connecter' : '' ?>
      </h1>

      <form action="#" method="post">

        <div class="w-full rounded-lg border p-4">


          <div class="align-center text-2xl font-bold flex items-center mb-4">

            <img src="../assets/images/logo.svg" alt="" width="60">
            <p class="ml-4">Connexion</p>
          </div>

          <div class="form-control w-full mb-4">
            <input required oninput="this.value = this.value.toUpperCase()" name="cuidtsp" maxlength="8" type="text" placeholder="CU-ID" class="input input-bordered w-full" />
          </div>

          <div class="form-control w-full">
            <input required name="mdptsp" maxlength="30" type="password" placeholder="Mot de passe" class="input input-bordered w-full" />
          </div>

          <div class="flex flex-row-reverse w-full">
            <button class="btn mt-4" type="submit" name="connexion">SE CONNECTER</button>
          </div>


        </div>

      </form>

      <div class="flex justify-end m-2">
        <p>Toujours pas inscrit ? <a class="font-bold" href="inscription.php">Inscription</a></p>
      </div>

      <?php include('../flags/flags.php') ?>

      <?php

      $controller = new controller;

      if (isset(($_POST['connexion']))) {
        $controller->connexion($_POST['cuidtsp'], $_POST['mdptsp']);
      }

      ?>

    </div>

    <div></div>

  </div>


</body>

</html>