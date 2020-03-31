<!doctype html>
<html lang="fr">

    <head>

        <meta charset="utf-8">

        <title>Histoires de Poilus</title>

        <meta content=" " name="description">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/resp.css">
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
    'Ok', 'En savoir plus', '../cookies.php');
    });
    </script>

    <?php include('include/resp.inc'); ?>

    <header>

        <?php include('include/social.inc'); ?>

        <a href="index.php" title="retour sur la page d'accueil du site">
        <img src="images/logo.png" class="logo" alt="Logo du site Histoires de Poilus"/></a>

    </header>

    <nav>
        <a href="contact.php">Contact</a>
        <a href="webographie.php">Les Ressources</a>
        <a href="lieux.php">Les Batailles</a>
        <a href="camps.php">Les Camps</a>
        <a href="tombes.php">Les Tombes</a>
        <a href="hopitaux/hopitaux.php">Les Hôpitaux</a>
        <a href="poilus.php" class="NavSelected">Les Poilus</a>
    </nav>

    <section>

        <article style="margin-left:0px;">   
        
        <h1>Les civils</h1>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

       	<p class="sources"><?php setlocale(LC_ALL,'french'); echo "Dernière modification effectuée le ".date("j F Y", getlastmod()); ?></p>

        </article>

    </section>

    <footer><?php include('include/footer.inc'); ?></footer>

    <?php include('include/stats.inc'); ?>

    <!-- javascript -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    </body>
</html>