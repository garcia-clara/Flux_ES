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

  <title>ESPACE TSP - Ajouter un utilisateur</title>
</head>

<body>

  <div class="grid grid-cols-6 h-screen">

    <?php include('../components/menu.php') ?>

    <div class="col-start-2 col-end-7">

      <div class="my-12 ml-12 text-3xl font-bold flex items-center">
        <i class="bi bi-person-plus-fill text-6xl"></i>
        <p class="ml-4">AJOUTER UN UTILISATEUR</p>
      </div>


      <div class="w-2/6 rounded-lg ml-8 border p-4">

        <div class="flex mb-8">
          <div class="form-control w-full max-w-xs mr-4">
            <input type="text" placeholder="Prénom" class="input input-bordered w-full max-w-xs" />
          </div>

          <div class="form-control w-full max-w-xs">
            <input type="text" placeholder="Nom" class="input input-bordered w-full max-w-xs" />
          </div>
        </div>

        <div class="form-control w-full">
          <input type="text" placeholder="CU-ID" class="input input-bordered w-full" />
        </div>

        <div class="form-control w-full">
          <label class="label">
            <span class="label-text">Heure d'arrivée</span>
          </label>
          <input type="time" placeholder="Type here" class="input input-bordered w-full" />
        </div>

        <div class="flex">
          <div class="form-control w-full max-w-xs mr-4">
            <label class="label">
              <span class="label-text">Motif</span>
            </label>
            <select class="select select-bordered">
              <option disabled selected>Sélectionner</option>
              <option>DMI</option>
              <option>Incident</option>
              <option>ROADMAP</option>
              <option>PILAF</option>
              <option>Autre</option>
            </select>
          </div>

          <div class="form-control w-full max-w-xs mt-9">
            <input type="text" placeholder="Numéro INC, DMI..." class="input input-bordered w-full max-w-xs" />
          </div>

        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Commentaire</span>
          </label>
          <textarea class="textarea textarea-bordered h-24" placeholder="Clavier HS, demande de chargeur, création de PKI..."></textarea>
        </div>

        <div class="flex flex-row-reverse w-full">
          <button class="btn m-4">Ajouter</button>
        </div>

      </div>

    </div>
  </div>



</body>

</html>