<?php include('../include/fonctions.inc'); ?>

<!doctype html>
<html lang="fr">

    <head>

        <meta charset="utf-8">

        <title>Dossier d'ancien combattant de Noel JOLY - Histoires de Poilus</title>
        <meta content="Version numérisée du dossier d'ancien combattant du soldat Léon Albert GRAIN obtenu aux archives départementales du Nord" name="description">

        <link rel="stylesheet" href="../css/style.css" media="screen">
        <link rel="stylesheet" href="../css/resp.css" media="screen">
        <link rel="stylesheet" href="../css/fontawesome/css/all.min.css" media="screen">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/png" href="../images/favicon.png"/>

        <style>

        aside {
            width:222px;
        }

        .vignette {
            border:1px solid #eFeFeF;
            width:40%;
            text-align:center;
            float:left;
            height:110px;
            vertical-align: middle;
            margin: 7px;
        }

        .vignette img {
            width: 60px;
            margin-top: 6px;
        }

        .vignette figcaption {
            color:#eFeFeF;
            border-top:1px solid #eFeFeF;
        }

        </style>

    </head>

    <body>

    <!-- code js pour l'avertissement sur les cookies -->

    <script src="../js/cookiechoices.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsentBar('En naviguant sur le site, vous acceptez l'utilisation de cookies pour vous proposer une navigation optimale et me permettre de réaliser des statistiques de visites.',
    'Ok', 'En savoir plus', '../cookies.php');
    });
    </script>

     

    <header>

        <?php include('../include/social.inc'); ?>

        <a href="../index.php" title="Retour sur la page d'accueil du site">
        <img src="../images/logo.png" class="logo" alt="Logo du site Histoires de Poilus"/></a>

    </header>

    <nav>
        <a href="../contact.php">Contact</a>
        <a href="../webographie.php">Les Ressources</a>
        <a href="../lieux.php">Les Batailles</a>
        <a href="../camps.php">Les Camps</a>
        <a href="../tombes.php">Les Tombes</a>
        <a href="../hopitaux/hopitaux.php">Les Hôpitaux</a>
        <a href="../poilus.php" class="NavSelected">Les Poilus</a> 
    </nav>

    <section>

    <aside>

    <?php

    /* TODO : Optimise des vignettes. La taille semble être 60*80 */

    AncienCombattant("JOLY_Noel",21);

    ?>

    </aside>

    <article>

    <h1>Dossier d'ancien combattant de Noel JOLY</h1>

    <?php /* TODO : SEO */ ?>

    <figure>
        <a href="images/DELAUX_Oscar/page_1.jpg" id="testgal2" data-fancybox="gallery" data-caption="Dossier d'ancien combattant du soldat Oscart DELAUX">
        <img src="images/DELAUX_Oscar/page_1.jpg" id="testgal" alt="Extrait du dossier d'ancien combattant de Noël JOLY" style="width:80%"/></a>
        <figcaption>Dossier d'ancien combattant de Noel JOLY<br />(Source: <a href="https://www.geneachtimi.com/">Généachtimi</a> et <a href="https://archivesdepartementales.lenord.fr/">Archives du Nord</a>)</figcaption>
    </figure>

    </article>

</section>

<footer><?php include('../include/footer.inc'); ?></footer>

<?php include('../include/stats.inc'); ?> 

<!-- javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
<script type="text/javascript" src="../js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>

</body>
</html>