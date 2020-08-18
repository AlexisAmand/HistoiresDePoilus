<!doctype html>
<html lang="fr">

    <head>

        <meta charset="utf-8">

        <title>Mentions légales - Histoires de Poilus</title>
        <meta content="mentions légales du site 'Histoires de poilus'. Coordonnées de l'éditeur et de hébergeur du site." name="description">

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
        <a href="poilus.php">Les Poilus</a>
        <a href="index.php">Accueil</a>
    </nav>

    <section>

        <article>

            <h1>Mentions Légales</h1>

            <h2>Editeur du site</h2>

            <p><a href="http://www.genealexis.fr" title="Généalogie de la famille AMAND et de ses alliances">Alexis AMAND</a><br />Saint-Saulve (Nord)<br /></p>

			<h2>Création du site</h2>

            <p><a href="http://www.boitasite.com" title="Création de sites web à Valenciennes">Boitasite</a><br />Valenciennes (Nord)<br />SIRET : 517 501 235 000 17<br /></p>
				
            <h2>Hébergeur du site</h2>

            <p><a href="http://www.amen.fr/">AMEN SASU</a><br />12-14, Rond Point des Champs Elysées 75008 Paris.<br />RCS : 421 527 797 000 11<br /></p>

            <h2>Informations complémentaires</h2>

            <ul>
                <li>Conformément à la loi n° 78-17 du 6 janvier 1978, relative à l'Informatique, aux Fichiers et aux Libertés, vous disposez d'un droit d'accès et de rectification des données à caractère personnel vous concernant et faisant l'objet de traitements.</li>
                <li>En vue d'adapter le site aux demandes de ses visiteurs, je mesure le nombre de visites, le nombre de pages vues ainsi que de l'activité des visiteurs sur le site et leur fréquence de retour avec l'outil <a href="https://matomo.org" title="aller sur le site de Matomo">Matomo (ex Piwik)</a>.</li>
                <li><a href="https://matomo.org" title="aller sur le site de Matomo">Matomo (ex Piwik)</a>, l'outil de statistiques utilisé par le site "Histoires de Poilus", génère un cookie avec un identifiant unique, dont la durée de conservation est limitée à 13 mois. Je collecte également votre adresse IP, afin de déterminer la ville depuis laquelle vous vous connectez. Celle-ci est immédiatement anonymisée après utilisation. "Histoires de Poilus" ne peut donc en aucun cas remonter par ce biais à une personne physique.</li>
            </ul>

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