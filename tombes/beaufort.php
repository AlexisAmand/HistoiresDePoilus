<!doctype html>
<html lang="fr">

    <head>

        <meta charset="utf-8">

        <title>Le monument aux morts de Beaufort - Histoires de Poilus</title>
        <meta content="Le monument aux morts pour la France pendant les deux guerres mondiales à Beaufort" name="description">

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

    <?php include('../include/resp.inc'); ?>

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
          <li><a href="beaufort.php" class="AsideSelected">Beaufort</a></li>
	      <li><a href="capelle.php">Capelle-sur-Ecaillon</a></li>
          <li><a href="fontaine-au-bois.php">Fontaine-au-bois</a></li>
	      <li><a href="grand-fayt.php">Grand-Fayt</a></li>
	      <li><a href="maroilles.php">Maroilles</a></li>
          <li><a href="saint-saulve.php">Saint-Saulve</a></li>
          <li><a href="valenciennes.php">Valenciennes</a></li>  
    </ul>

    <?php include ('../include/pub.inc'); ?>

    </aside>

        <article>

        <h1>Le monument aux morts de Beaufort</h1>

        <figure>
            <a href="images/monument-beaufort-01.jpg" data-fancybox="gallery" data-caption="Le monument aux Morts de Beaufort (Nord)">
            <img src="images/mini/monument-beaufort-01.jpg" alt="le Monument aux Morts pour la France de Beaufort dans l'Avesnois"/></a>
            <figcaption>Le monument aux morts de Beaufort<br />(Source: Photo privée)</figcaption>
        </figure>

		<figure>
            <a href="images/monument-beaufort-02.jpg" data-fancybox="gallery" data-caption="La plaque hommage aux victime de 39-45 à Beaufort (Nord)">
            <img src="images/mini/monument-beaufort-02.jpg" alt="La plaque hommage aux victimes de 39-45 du monument aux Morts pour la France de Beaufort dans l'Avesnois"/></a>
            <figcaption>La plaque hommage aux victimes de 39-45<br />(Source: Photo privée)</figcaption>
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