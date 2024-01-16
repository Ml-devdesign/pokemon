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
    :root {
        --primary: #e3d220;
        --secondary: ##8f8f8f;
        --gray-darker: #2C3E50;
        --primary-font: 'Roboto', sans-serif;
        --secondary-font: 'Pontiac', sans-serif;
      }
      
    body{
        background-color:var();
    }

    .main_main{
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }
    .main_hero{
        width: 1943px;
        padding-bottom: 123px;
    }
    .pokemon{
        
        
        
    }

    .carte{
        display:flex;
        flex-direction:column;
        align-items:stretch;
        flex-wrap:wrap;
        border:25px ridge rgba(0,0,0,.3);
        height: 826px;
        background-color:var(--primary);
        align-items: center;
    }
    .image{
        border:25px solid rgba(0,0,0,.3);
        height: 150px;
        width: 150px;
    
    }
    .img_bg{
        display:flex;
        justify-content: center;
    
    }
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
                <div class="img_bg">
                <img src=" <?= $row['pok_image_online'] ?>" class="image">
                </div>
                <h1><?= $row['pok_nom'] ?></h1>
                <h3>Poke Taille : <?= $row['pok_taille'] ?></h3>
    </div>
    </section>

<?php

}

?>
</main>
</body>
</html>
