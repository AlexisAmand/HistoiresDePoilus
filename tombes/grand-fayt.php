<!doctype html>
<html lang="fr">

    <head>

        <meta charset="utf-8">

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
        <a href="../tombes.php" class="NavSelected">Les Tombes</a>
        <a href="../hopitaux/hopitaux.php">Les Hôpitaux</a>
        <a href="../poilus.php">Les Poilus</a> 
    </nav>

    <section>

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

        <article>

        <h1>Le monument aux morts de Grand-Fayt</h1>

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

    <footer><?php include('../include/footer.inc'); ?></footer>

    <?php include('../include/stats.inc'); ?>

    <!-- javascript -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    <script type="text/javascript" src="../js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>

    </body>
</html>