<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>Le monument aux morts de Grand-Fayt - Histoires de Poilus</title>
        <meta content="Le monument aux morts pour la France pendant la Première Guerre Mondiale (1914-1918) à Grand-Fayt" name="description">

        <link rel="stylesheet" href="../css/style.css" media="screen">
        <link rel="stylesheet" href="../css/resp.css" media="screen">
        <link rel="stylesheet" href="../css/fontawesome/css/all.min.css" media="screen">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/png" href="../images/favicon.png"/>

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

<header class="row" style="background-color: #364046;height: 175px;">
    
    <hgroup class="col-md-6 text-center align-self-center order-2 order-md-1">
        <a href="../index.php" title="Retour sur la page d'accueil du site">
        <img src="../images/logo.png" class="logo" alt="Logo du site Histoires de Poilus"/></a>
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

    <section class="row">

    <aside>

    <ul>   
        <li class="asideheader">Nord</li>
          <li><a href="awoingt.php">Awoingt</a></li>
          <li><a href="beaufort.php">Beaufort</a></li>
	      <li><a href="capelle.php">Capelle-sur-Ecaillon</a></li>
          <li><a href="fontaine-au-bois.php">Fontaine-au-bois</a></li>
          <li><a href="grand-fayt.php" class="AsideSelected">Grand-Fayt</a></li>
          <li><a href="maroilles.php">Maroilles</a></li>
          <li><a href="rieulay.php">Rieulay</a></li>
          <li><a href="saint-saulve.php">Saint-Saulve</a></li>
          <li><a href="valenciennes.php">Valenciennes</a></li>  
    </ul>

    <?php include ('../include/pub.inc'); ?>

    </aside>

        <article class="col-12">

        <h1 class="my-4">Le monument aux morts de Grand-Fayt</h1>

        <figure>
            <a href="images/grand-fayt-02.jpg" data-fancybox="gallery" data-caption="Le monument aux Morts de Grand-Fayt (Nord)">
            <img src="images/mini/grand-fayt-02.jpg" alt="le Monument aux Morts de Grand-Fayt dans l'Avesnois"/></a>
            <figcaption>Le monument aux morts de Grand-Fayt<br />(Source: Photo privée)</figcaption>
        </figure>

		<figure>
            <a href="images/grand-fayt-01.jpg" data-fancybox="gallery" data-caption="Le monument aux Morts de Grand-Fayt (Nord)">
            <img src="images/mini/grand-fayt-01.jpg" alt="le Monument aux Morts de Grand-Fayt dans l'Avesnois"/></a>
            <figcaption>Le monument aux morts de Grand-Fayt<br />(Source: Photo privée)</figcaption>
        </figure>
        
        <figure>
            <a href="images/grand-fayt-03.jpg" data-fancybox="gallery" data-caption="Le monument aux Morts de Grand-Fayt (Nord)">
            <img src="images/mini/grand-fayt-03.jpg" alt="le Monument aux Morts de Grand-Fayt dans l'Avesnois"/></a>
            <figcaption>Le monument aux morts de Grand-Fayt<br />(Source: Photo privée)</figcaption>
        </figure>

        <?php /* TODO : mettre liste des soldats + faire lien sur index des noms */ ?>

        </article>

    </section>

    <footer class="row"><?php include('../include/footer.inc'); ?></footer>

    <?php include('../include/stats.inc'); ?>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>