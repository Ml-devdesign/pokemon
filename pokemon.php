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
// Inclusion du fichier 'connec.php' qui contient les détails de connexion à la base de données
include 'connec.php';

// Requête SQL pour sélectionner toutes les colonnes de la table 'pokemon' avec une limite de 20 lignes
$sql = 'SELECT * FROM pokemon limit 20';
// Exécution de la requête SQL et stockage du résultat dans la variable $result ( La requête est exécutée, et le résultat est stocké dans la variable $result.)
$result = $connec->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Liaison d'une feuille de style externe nommée 'pokemon.css' -->
    <link rel="stylesheet" href="pokemon.css">

    <style>
        /* Définition des variables CSS */
        :root {
            --primary: #e3d220;
            --secondary: ##8f8f8f;
            --gray-darker: #2C3E50;
            --primary-font: 'Roboto', sans-serif;
            --secondary-font: 'Pontiac', sans-serif;
        }

        body {
            background-color: var(--primary); 
        }/* Utilisation de la variable CSS définie pour la couleur de fond */

        .main_main {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .main_hero {
            width: 1943px;
            padding-bottom: 123px;
        }

        .pokemon {}

        .carte {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            flex-wrap: wrap;
            border: 25px ridge rgba(0, 0, 0, .3);
            height: 826px;
            background-color: var(--primary);
            align-items: center;
        }

        .image {
            border: 25px solid rgba(0, 0, 0, .3);
            height: 150px;
            width: 150px;
        }

        .img_bg {
            display: flex;
            justify-content: center;
        }

    </style>
</head>
<body>
    <header class="main_hero">
        <!-- Images ou texte de substitution pour l'en-tête, car les attributs 'src' sont manquants -->
        <img class="main-hero-img" src="placeholder.jpg" alt="Image Principale de l'En-tête">
        <img class="Titre-site" src="placeholder.jpg" alt="Image du Titre du Site">
    </header>
    <main class="main_main">

        <?php
        //<!-- Boucle PHP pour afficher chaque Pokémon dans le résultat de la requête -->
        while ($row = $result->fetch_assoc()) {
        ?>
        <!-- Section pour chaque Pokémon -->
            <section class="pokemon">
                  <!-- Carte du Pokémon avec une image, un nom et une taille -->
                <div class="carte">
                    <div class="img_bg">
                        <!-- Affichage de l'image du Pokémon en utilisant la valeur de la colonne 'pok_image_online' -->
                        <img src="<?= $row['pok_image_online'] ?>" class="image">
                    </div>
                    <!-- Affichage du nom du Pokémon en utilisant la valeur de la colonne 'pok_nom' -->
                    <h1><?= $row['pok_nom'] ?></h1>
                    <!-- Affichage de la taille du Pokémon en utilisant la valeur de la colonne 'pok_taille' -->
                    <h3>Taille du Pokémon : <?= $row['pok_taille'] ?></h3>
                </div>
            </section>
        <?php
        }
        ?>
    </main>
</body>
</html>
