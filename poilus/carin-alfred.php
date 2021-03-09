<!doctype html>
<html lang="fr">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Biographie et parcours du soldat CARIN Alfred - Histoires de Poilus</title>
    <meta content="Parcours de Alfred CARIN, soldat français pendant la Première Guerre Mondiale" name="description">

    <link rel="stylesheet" href="../css/style.dev.css" media="all">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="../images/favicon.png"/>

    <!-- Initialisation d'une variable pour masquer/afficher le menu -->

    <script>
    AsideVisible = 1;
    </script>

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

            <?php include $_SERVER['DOCUMENT_ROOT'].'./include/nav-poilus-59.inc'; ?>

        </div>

    </aside>

    <article id="article">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index.php" title="Retour à la page d'accueil">Accueil</a></li>
            <li class="breadcrumb-item"><a href="../poilus.php" title="Les biographies de soldat de la Première Guerre Mondiale">Les poilus</a></li>
            <li class="breadcrumb-item active" aria-current="page">Alfred CARIN</li>
        </ol>
    </nav>

    <span onclick="afficheMenu();" id="asidebouton"><i class="fas fa-bars"></i>&nbsp;Afficher la liste des noms</span>

    <h1 class="my-4">Alfred CARIN</h1>

        <p class="text-justify">Pour info, Alfred a plusieurs frères et soeurs dont <a href="CARIN-Edouard.php" title="Biographie du soldat Edouard CARIN">Edouard</a>, <a href="carin-jean-baptiste.php" title="Biographie du soldat Jean Baptiste CARIN">Jean-Baptiste</a>, <a href="carin-joseph.php" title="Biographie du soldat Joseph CARIN">Joseph</a>, <a href="CARIN-Leon.php" title="Biographie du soldat Léon CARIN">Léon</a> et <a href="CARIN-Theophile.php" title="Biographie du soldat Théophile CARIN">Théophile</a> qui ont également combattu pour la France pendant la Grande Guerre.</p>
        
        <p class="text-right">A suivre...</p>
        
        <h2>Sources et bibliographie</h2>
        
        <ul>
	        <li><a href="https://amzn.to/2LqzGM2" title="Retrouver l'histoire d'un ancêtre poilu" target="_blank">
          Retrouvez l'histoire de votre grand-père en 1914-1918</a> (Archives et Cultures / Yves Buffetaut)</li>
	        <li><a href="https://archivesdepartementales.lenord.fr/" title=" " target="_blank">Archives départementales du Nord</a></li>
        </ul>

    </article>

    </section>

</div>

<!-- pied de page -->

<div class="container-fluid">

    <div class="container">

    <footer class="row mt-4">
        <?php include $_SERVER['DOCUMENT_ROOT'].'./include/footer.inc'; ?>
    </footer>

    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

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
    document.getElementById("asidebouton").innerHTML = "<i class='fas fa-bars'></i>&nbsp;Masquer la liste des noms";

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
    document.getElementById("asidebouton").innerHTML = "<i class='fas fa-bars'></i>&nbsp;Afficher la liste des noms";

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
