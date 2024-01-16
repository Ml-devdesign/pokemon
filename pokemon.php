__                                 
<!-- 
    
 ▄▄▄·      ▄ •▄ ▄▄▄ .• ▌ ▄ ·.        ▐ ▄ 
▐█ ▄█▪     █▌▄▌▪▀▄.▀··██ ▐███▪▪     •█▌▐█
 ██▀· ▄█▀▄ ▐▀▀▄·▐▀▀▪▄▐█ ▌▐▌▐█· ▄█▀▄ ▐█▐▐▌
▐█▪·•▐█▌.▐▌▐█.█▌▐█▄▄▌██ ██▌▐█▌▐█▌.▐▌██▐█▌
.▀    ▀█▄▀▪·▀  ▀ ▀▀▀ ▀▀  █▪▀▀▀ ▀█▄▀▪▀▀ █▪ 

 ____                    
|  _ \   /\        /\    
| |_) ) /  \      /  \   
|  _ ( / /\ \    / /\ \  
| |_) ) /__\ \  / /__\ \ 
|____/________\/________\
                         
-->


<?php
include 'connec.php' ;

$sql='SELECT * FROM pokemon limit 20'; 
$result=$connec->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pokemon.css">
    
<style>
    
</style>
</head>
<body>
<header class="main_hero">
    <img class="main-hero-img">
    <img class="Titre-site">
</header>
<main class="main_main">

<?php

while ($row=$result->fetch_assoc()){                              

?>
<section class="pokemon">
    <div class="carte">
        <button class="button">BASE</button>
        <h2 class="nom-poke"><?= $row['pok_nom'] ?></h2>
        <h2>PV:</h2>
        <!-- <h2 class="pv-container">PV:</h2>
        <script src="pokemon.js"></script>  -->
        <div class="img_bg shiny-effect">
            <img src=" <?= $row['pok_image_online'] ?>" class="image">
        </div>
        <div class="info_carte">
            <p>Taille : <?= $row['pok_taille'] ?></p>
            <p>Generation : <?= $row['pok_generation'] ?></p>
            <div class="text-container">
                <!-- Le texte généré sera placé ici -->
            </div>
                <!-- Référence vers votre fichier JavaScript externe -->
            <script src="pokemon.js"></script>
        </div>
    </div>
</section>

<?php

}

?>
</main>
</body>
</html>
