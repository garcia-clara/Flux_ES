<!DOCTYPE html>
<html data-theme="emerald" lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.45.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>

<div class="grid grid grid-cols-6 h-screen">
    <div class="row start-1 row-end-1 shadow-md">
      <div>
        <div class="flex items-center bg-black">
          <img src="../assets/images/logo.svg" alt="" width="100" class="p-4">
          <p class="font-bold text-xl text-white">ESPACE TSP</p>
        </div>

        <ul class="menu bg-base-100 w-full p-2">
          <li class="menu-title">
            <span>Gestion du flux</span>
          </li>
          <li><a>Ajouter une personne</a></li>
          <li><a>Consulter les personnes en attente</a></li>
          <li class="menu-title">
        </ul>
      </div>
    </div>

  <div class="col-start-2 col-end-7">
    <h1 class="text-5xl font-bold m-8">Bonjour Clara !</h1>

    <p class="ml-12 text-lg font-bold">AJOUTER UNE PERSONNE</p>

    <div class="w-3/6 rounded-md ml-8">
          <div class="form-control m-4">
            <label class="input-group w-full">
              <span>Prénom</span>
              <input type="text" class="input input-bordered" />
            </label>
          </div>

          <div class="form-control m-4">
            <label class="input-group">
              <span>Nom</span>
              <input type="text" class="input input-bordered" />
            </label>
          </div>

          <div class="form-control m-4">
            <label class="input-group">
              <span>CU-ID</span>
              <input type="text" class="input input-bordered" />
            </label>
          </div>

          <div class="form-control m-4">
            <label class="input-group">
              <span>Heure d'arrivée</span>
              <input type="time" class="input input-bordered" />
            </label>
          </div>

          <div class="form-control m-4">
            <label class="input-group input-group-vertical">
              <span>Commentaire</span>
              <input type="text" class="input input-bordered h-20" />
            </label>
          </div>

          <div class="flex flex-row-reverse w-full">
            <button class="btn mr-4">Ajouter</button>
          </div>

    </div>
  
  </div>
</div>


    
</body>
</html>