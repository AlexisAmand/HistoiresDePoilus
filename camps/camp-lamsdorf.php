<!doctype html>
<html lang="fr">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Le camp de prisonniers de Lamsdorf pendant la Grande Guerre - Histoires de Poilus</title>
    <meta name="description"  content="Présentation du camp de prisonniers de Lamsdorf en Allemagne pendant la Première Guerre mondiale (1914-1918)">

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

  <!-- menu de navigation -->

  <div class="container-fluid">

      <div class="container">

          <div class="row">

              <div class="col-12 text-center">

                  <a href="../index.php">
                      <img src="../images/grand-logo.jpg" class="logo" alt="Logo du site Histoires de Poilus"/>
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

    <aside id="aside">

        <div class="list-group">

            <?php include('../include/nav-camps.inc'); ?>

        </div>

    </aside>

    <article id="article">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item"><a href="#">Rubrique</a></li>
            <li class="breadcrumb-item active" aria-current="page">Le camp de Lamsdorf</li>
        </ol>
    </nav>

    <span onclick="afficheMenu();" id="asidebouton"><i class="fas fa-bars"></i>&nbsp;Afficher la liste des camps</span>

    <h1 class="my-4">Le camp de prisonniers de Lamsdorf</h1>

    <p class="text-justify">Quelques semaines avant la fin de la Grande Guerre, en octobre 1918, la circulaire n°34 du Bureau de Secours au Prisonniers de Guerre de Berne annonce que les prisonniers de guerre français de l'armée d'orient capturés en Macédoine seront affectés au camp de Lamsdorf où sont déjà installés 200 français.</p>

    <?php /* TODO : Trouver le doc ci-dessus */ ?>

    <h2>Sources et bibliographie</h2>

        <ul>
            <li><a href="https://amzn.to/2MTTkR9" title="Livre sur les prisonniers de guerre dans l'histoire" target="_blank">
            Les prisonniers de guerre dans l'histoire : Contacts entre peuples et cultures</a></li>
            <li><a href="http://amzn.to/2uBK1k3" title="Le livre prisonniers 1914-1918 par Jean-Paul Briastre" target="_blank">
            Prisonniers 1914-1918</a> (Jean-Paul Briastre, 2013)</li>
            <li>Bulletin du Bureau de Secours de Berne</li>
            <li>L'Intermède du 24 septembre 1916</li>
        </ul>

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