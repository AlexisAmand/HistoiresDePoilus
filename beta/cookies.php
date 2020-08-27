<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>Présentation des cookies - Histoires de Poilus</title>

        <meta name="description" content="Cette page explique le fonctionnement et l'utilité des cookies présent sur le site">

        <link rel="stylesheet" href="css/style.css" media="all">
         
        <link rel="stylesheet" href="css/fontawesome/css/all.min.css">  

        <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/png" href="images/favicon.png" />

    </head>

    <body>

    <!-- code js pour l'avertissement sur les cookies -->

    <script src="js/cookiechoices.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsentBar('En naviguant sur le site, vous acceptez l'utilisation de cookies pour vous proposer une navigation optimale et me permettre de réaliser des statistiques de visites.',
    'Ok', 'En savoir plus', 'cookies.php');
    });
    </script>

<div class="container">

<header class="row" style="background-color: #364046;height: 175px;">
    
    <hgroup class="col-md-6 text-center align-self-center order-2 order-md-1">
        <a href="index.php" title="Retour sur la page d'accueil du site">
        <img src="images/logo.png" class="logo" alt="Logo du site Histoires de Poilus"/></a>
    </hgroup>
    
    <div class="col-md-6 text-right align-self-top order-1 order-md-2" id="reseaux">
        <a href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>" title="Partager cette page sur Facebook">
        <i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/alexisamand/" title="Voir le compte Instagram du webmaster">
        <i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>" title="Partager cette page sur Twitter">
        <i class="fab fa-twitter-square"></i></a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>" title="Partager cette page sur LinkedIn"> 	
        <i class="fab fa-linkedin"></i></a>
    </div>

</header>

    <section>

        <article style="margin-left:0px;">

            <h1>Les cookies</h1>

            <h2>Qu'est-ce qu'un cookie ?</h2>

            <p>Le cookie est l'équivalent d'un petit fichier texte stocké sur l'ordinateur de l'internaute. Existants depuis plus de 20 ans, ils permettent aux développeurs de sites internet de conserver des données utilisateur afin de faciliter leur navigation et de permettre certaines fonctionnalités. Les cookies ont toujours été plus ou moins controversés car contenant des informations personnelles résiduelles pouvant potentiellement être exploitées par des tiers.</p>

            <p></p>

            <h2>Sont-ils dangereux ?</h2>

            <p>Étant de simples fichiers de texte, les cookies ne sont pas exécutables. <strong>Ils ne sont ni des logiciels espions, ni des virus</strong>, bien que des cookies provenant de certains sites soient détectés par plusieurs logiciels antivirus parce qu'ils permettent aux utilisateurs d'être suivis quand ils ont visité plusieurs sites. La plupart des navigateurs récents permettent aux utilisateurs de décider s'ils acceptent ou rejettent les cookies. Les utilisateurs peuvent aussi choisir la durée de stockage des cookies. Toutefois, <strong>le rejet complet des cookies rend certains sites inutilisables</strong>. Par exemple, les paniers d'achat de magasins ou les sites qui exigent une connexion à l'aide d'identifiants (utilisateur et mot de passe).</p>

            <p></p>

            <p>Pour plus d'informations, je vous invite à vous rendre sur le site de la CNIL, <a href="http://www.cnil.fr/vos-droits/vos-traces/les-cookies/">rubrique Cookies</a>. L'organisme a également mis en ligne une petite vidéo explicative que je vous propose en cliquant <a href="https://www.dailymotion.com/video/x16lt53">sur ce lien</a>.</p>

             

        </article>

    </section>

    <footer class="row"><?php // TODO: dddddddddddd 
    
    include('include/footer.inc'); ?></footer>

    <?php include('include/stats.inc'); ?>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>