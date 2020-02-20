<!doctype html>
<html lang="fr">

    <head>

        <meta charset="utf-8">

        <title>Tombes de poilus à Maroilles - Histoires de Poilus</title>
        <meta content="Quelques photos de tombes de soldats valenciennois morts pour la France pendant la Première Guerre Mondiale (1914-1918)" name="description">

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
        <a href="../webographie.php">Webographie</a>
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
	      <li><a href="grand-fayt.php">Grand-Fayt</a></li>
	      <li><a href="maroilles.php" class="AsideSelected">Maroilles</a></li>
          <li><a href="valenciennes.php">Valenciennes</a></li>  
    </ul>

    <div id="pubaside">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Poilus -->
        <ins class="adsbygoogle"
        style="display:inline-block;width:160px;height:600px"
        data-ad-client="ca-pub-1550427609493753"
        data-ad-slot="8236218848"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>

    </aside>

    <article>

    <h1>Les monuments de Maroilles</h1>
    
    <figure>
        <a href="images/monument-maroilles.jpg" data-fancybox="gallery" data-caption="Le monument aux morts de Maroilles">
        <img src="images/mini/monument-maroilles.jpg" alt="Le monument aux morts pour la France à Maroilles"/></a>
        <figcaption>Le monument aux morts de Maroilles<br />(Source: Photo privée)</figcaption>
    </figure>

	<p>A noter qu'il existe aussi, à Maroilles, un Arc de Trionphe. Il a été élevé en 1807 à la "gloire de nos armées" par Nicolas Joseph Vendois, maire de l' an VII à 1816.</p>

    <figure>
        <a href="images/arche-maroilles.jpg" data-fancybox="gallery" data-caption="L'Arc de Triomphe de Maroilles">
        <img src="images/mini/arche-maroilles.jpg" alt=" "/></a>
        <figcaption>L'Arc de Triomphe de Maroilles<br />(Source: Photo privée)</figcaption>
    </figure>
    <p class="sources"><?php setlocale(LC_ALL,'french');echo "Dernière modification effectuée le ".date("j/m/Y", getlastmod()); ?></p>

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