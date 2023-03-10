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
  <title>ESPACE TSP - Inscription</title>
</head>

<body>

  <div class="grid grid-cols-3 h-screen">

    <div></div>

    <div class="my-24">

      <form action="#" method="post">

        <div class="w-full rounded-lg border p-4">

          <div class="align-center text-2xl font-bold flex items-center mb-4">

            <img src="../assets/images/logo.svg" alt="" width="60">
            <p class="ml-4">Inscription</p>
          </div>

          <div class="flex mb-4">
            <div class="form-control w-full max-w-xs mr-4">
              <input required style="text-transform:capitalize;" name="prenomtsp" maxlength="15" type="text" placeholder="Prénom" class="input input-bordered w-full max-w-xs" />
            </div>

            <div class="form-control w-full max-w-xs">
              <input required oninput="this.value = this.value.toUpperCase()" name="nomtsp" maxlength="15" type="text" placeholder="Nom" class="input input-bordered w-full max-w-xs" />
            </div>
          </div>

          <div class="form-control w-full mb-4">
            <input required oninput="this.value = this.value.toUpperCase()" name="cuidtsp" maxlength="8" type="text" placeholder="CU-ID" class="input input-bordered w-full" />
          </div>

          <div class="form-control w-full">
            <input required name="mdptsp" maxlength="30" type="password" placeholder="Mot de passe" class="input input-bordered w-full" />
          </div>

          <div class="flex flex-row-reverse w-full">
            <button class="btn mt-4" type="submit" name="inscription">S'INSCRIRE</button>
          </div>

        </div>

      </form>

      <div class="flex justify-end m-2">
        <p>Déjà inscrit ? <a class="font-bold" href="connexion.php">Connexion</a></p>
      </div>

      <?php

      $controller = new controller;

      if (isset($_POST['inscription'])) {
        $controller->model->inscription($_POST);
        header('Location: ./connexion.php?status=ok');
      }

      ?>

    </div>

    <div></div>

  </div>


</body>

</html>