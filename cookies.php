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

    <link rel="stylesheet" href="css/style.dev.css" media="all">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="images/favicon.png"/>

    <!-- code pour les cookies -->

    <script type="text/javascript" src="/tarteaucitron/tarteaucitron.js"></script>

    <script type="text/javascript">
    tarteaucitron.init({
	  "privacyUrl": "", /* Privacy policy url */

	  "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
	  "cookieName": "tarteaucitron", /* Cookie name */

	  "orientation": "middle", /* Banner position (top - bottom) */

	  "showAlertSmall": false, /* Show the small banner on bottom right */
	  "cookieslist": false, /* Show the cookie list */

      "showIcon": true, /* Show cookie icon to manage cookies */
      "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */

	  "adblocker": false, /* Show a Warning if an adblocker is detected */

      "DenyAllCta" : true, /* Show the deny all button */
      "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
      "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */

	  "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

	  "removeCredit": false, /* Remove credit link */
	  "moreInfoLink": true, /* Show more info link */

      "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
      "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */

	  //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */

      "readmoreLink": "", /* Change the default readmore link */

      "mandatory": true, /* Show a message about mandatory cookies */
    });
    </script>

</head>

<body>

<!-- menu de navigation -->

<div class="container-fluid">

    <div class="container">

        <div class="row">

            <div class="col-12 text-center">

                <a href="index.php">
                    <img src="images/grand-logo.jpg" class="logo" alt="Logo du site Histoires de Poilus"/>
                </a>

            </div>

            <div class="col-12 text-center">

                <?php include $_SERVER['DOCUMENT_ROOT'].'./include/nav.inc'; ?>

            </div>

        </div>

    </div>

<!-- entête avec l'image -->

    <header class="row">
        <div class="col-12">

        </div>
    </header>

</div>

<!-- contenu de la page -->

<div class="container">

    <section class="row">

        <article class="col-12">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                <li class="breadcrumb-item">Divers</li>
                <li class="breadcrumb-item active" aria-current="page">Cookies</li>
            </ol>
        </nav>

        <h1 class="my-4">Les cookies</h1>

            <h2>Qu'est-ce qu'un cookie ?</h2>

            <p class="text-justify">Le cookie est l'équivalent d'un petit fichier texte stocké sur l'ordinateur de l'internaute. Existants depuis plus de 20 ans, ils permettent aux développeurs de sites internet de conserver des données utilisateur afin de faciliter leur navigation et de permettre certaines fonctionnalités. Les cookies ont toujours été plus ou moins controversés car contenant des informations personnelles résiduelles pouvant potentiellement être exploitées par des tiers.</p>

            <h2>Sont-ils dangereux ?</h2>

            <p class="text-justify">Étant de simples fichiers de texte, les cookies ne sont pas exécutables. <strong>Ils ne sont ni des logiciels espions, ni des virus</strong>, bien que des cookies provenant de certains sites soient détectés par plusieurs logiciels antivirus parce qu'ils permettent aux utilisateurs d'être suivis quand ils ont visité plusieurs sites. La plupart des navigateurs récents permettent aux utilisateurs de décider s'ils acceptent ou rejettent les cookies. Les utilisateurs peuvent aussi choisir la durée de stockage des cookies. Toutefois, <strong>le rejet complet des cookies rend certains sites inutilisables</strong>. Par exemple, les paniers d'achat de magasins ou les sites qui exigent une connexion à l'aide d'identifiants (utilisateur et mot de passe).</p>

            <p>Pour plus d'informations, je vous invite à vous rendre sur le site de la CNIL, <a href="http://www.cnil.fr/vos-droits/vos-traces/les-cookies/">rubrique Cookies</a>. L'organisme a également mis en ligne une petite vidéo explicative que je vous propose en cliquant <a href="https://www.dailymotion.com/video/x16lt53">sur ce lien</a>.</p>

        </article>

    </section>

</div>

<!-- pied de page -->

<div class="container-fluid">

    <div class="container">

    <footer class="row mt-4">
        <?php include('include/footer.inc'); ?>
    </footer>

    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!-- Fenêtre modale de contact -->
<?php include $_SERVER['DOCUMENT_ROOT'].'./include/contact.inc'; ?>

<!-- code pour Matomo modifié pour prendre en compte Tarteaucitron.js -->

<script type="text/javascript">
  tarteaucitron.user.matomoId = 4;
  tarteaucitron.user.matomoHost = '//www.genealexis.fr/piwik/';
  (tarteaucitron.job = tarteaucitron.job || []).push('matomohightrack');
</script>

</body>
</html>
