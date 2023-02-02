<?php
session_start();
?>

 <div class="flex items-center bg-black">

        <div class="flex w-full items-center">
            <div class="flex flex-start w-2/4 items-center">
                <img src="../assets/images/logo.svg" alt="" width="100" class="p-4">
                <p class="font-bold text-xl text-white">ESPACE TSP</p>
                
            </div>

            <div class="flex justify-end items-center w-2/4">
                <p class="text-3xl text-white mr-4">Bonjour <?php echo $_SESSION['cuid'];?> !</p>
                <a class="m-4" href="logout.php"><i class="bi bi-box-arrow-right text-4xl text-white"></i></a>

            </div>
        </div>

    </div>

    <?php var_dump ($_SESSION); ?>