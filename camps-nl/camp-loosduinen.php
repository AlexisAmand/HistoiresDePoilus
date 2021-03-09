<!doctype html>
<html lang="fr">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Le camp d'internement de Loosduinen aux Pays-Bas pendant la Grande Guerre - Histoires de Poilus</title>
    <meta name="description"  content="Présentation du camp d'internement de Loosduinen aux Pays-Bas pendant la Première Guerre mondiale (1914-1918)">

    <link rel="stylesheet" href="../css/style.dev.css" media="all">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="../images/favicon.png"/>

    <!-- Initialisation d'une variable pour masquer/afficher le menu -->

    <script>
    AsideVisible = 1;
    </script>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <!-- code pour les cookies -->

    <script type="text/javascript" src="../tarteaucitron/tarteaucitron.js"></script>

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

  <!-- header du site  (menu + logo) -->

  <div class="container-fluid">

            <?php include $_SERVER['DOCUMENT_ROOT'].'./include/header2.inc'; ?>

  </div>

<!-- contenu de la page -->

<div class="container">

    <section class="row">

    <aside id="aside">

        <div class="list-group">

            <?php include('../include/nav-camps-nl.inc'); ?>

        </div>

    </aside>

    <article id="article">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/index.php" title="Retour à la page d'accueil">Accueil</a></li>
            <li class="breadcrumb-item"><a href="camps-internements.php" title="Accueil de la rubrique consacrée aux camps d'internement des Pays-bas">Les camps d'internement</a></li>
            <li class="breadcrumb-item active" aria-current="page">Le camp de Loosduinen</li>
        </ol>
    </nav>

    <span onclick="afficheMenu();" id="asidebouton"><i class="fas fa-bars"></i>&nbsp;Afficher la liste des camps</span>

    <h1 class="my-4">Le camp d'internement de Loosduinen</h1>

        <figure class="text-center">
            <img src="img/travaux.png">
        </figure>

    </article>

    </section>

</div>

<!-- pied de page -->

<div class="container-fluid">

    <div class="container">

    <footer class="row mt-4">
        <?php include('../include/footer.inc'); ?>
    </footer>

    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!-- JS de Fancybox -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<!-- Affiche/Masque le aside -->

<script>
function afficheMenu() {
  if (AsideVisible == 1)
    {
    /*
    document.getElementById("aside").style.visibility = "visible";
    */
    document.getElementById("aside").style.display="block";
    document.getElementById("aside").style.width="20%";
    document.getElementById("article").style.width="80%";
    document.getElementById("asidebouton").innerHTML = "<i class='fas fa-bars'></i>&nbsp;Masquer la liste des camps";

    AsideVisible = 0;
    }
  else
    {
    /*
    document.getElementById("aside").style.visibility = "hidden";
    */
    document.getElementById("aside").style.display="none";
    document.getElementById("aside").style.width="00%";
    document.getElementById("article").style.width="100%";
    document.getElementById("asidebouton").innerHTML = "<i class='fas fa-bars'></i>&nbsp;Afficher la liste des camps";

    AsideVisible = 1;
    }
}

</script>

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