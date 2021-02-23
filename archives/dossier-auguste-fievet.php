<!doctype html>
<html lang="fr">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Dossier d'ancien combattant d'Auguste Victor FIEVET - Histoires de Poilus</title>
    <meta content="Version numérisée du dossier d'ancien combattant du soldat Auguste Victor FIEVET obtenu aux archives départementales du Nord" name="description">

    <link rel="stylesheet" href="../css/style.dev.css" media="all">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="../images/favicon.png"/>

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

        <article class="col-12">

        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        	<li class="breadcrumb-item"><a href="index.php" title="Retour à la page d'accueil">Accueil</a></li>
            <li class="breadcrumb-item"><a href="../webographie.php#DossiersAnciensCombattants" title="Liste des dossiers d'anciens combattants en ligne sur le site">Les dossiers d'anciens combattants</a></li>
            <li class="breadcrumb-item active" aria-current="page">FIEVET Auguste Victor</li>
        </ol>
        </nav>

        <h1 class="my-4">Le dossier de FIEVET Auguste Victor</h1>

        <div class="row">
            <div class="MultiCarousel" data-items="3,3,5,8" data-slide="3" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">

                    <?php
                    for ($i = 1;$i<= 13;$i++)
                        {
                        echo '<div class="item"><div class="pad15">';
                        echo '<img src="images/FIEVET_Auguste _Victor/page_'.$i.'.jpg" alt="Extrait du dossier d\'ancien combattant d\'Auguste Victor FIEVET" class="img-thumbnail"';
                        echo 'onclick="document.getElementById(\'imageGal\').src=\'images/FIEVET_Auguste _Victor/page_'.$i.'.jpg\';
                        document.getElementById(\'imageGal2\').href=\'images/FIEVET_Auguste _Victor/page_'.$i.'.jpg\';"/>';
                        echo '</div></div>';
                        }
                    ?>

                </div>
                <button type="button" class="btn btn-outline-secondary leftLst"><i class="fas fa-chevron-left"></i></button>
                <button type="button" class="btn btn-outline-secondary rightLst"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>

        <figure class="text-center">
        	<a href="images/FIEVET_Auguste _Victor/page_1.jpg" id="imageGal2" data-fancybox="gallery" data-caption=" ">
        	<img src="images/FIEVET_Auguste _Victor/page_1.jpg" id="imageGal" alt="extrait du dossier d'ancien combattant de FIEVET Auguste Victor" class="figure-img img-fluid img-thumbnail"/></a>
        	<figcaption class="figure-caption">Dossier d'ancien combattant de FIEVET Auguste Victor<br />
			(Source: <a href="https://www.geneachtimi.com/" title="Généachtimi : Site pour rechercher ses ancêtres dans les Hauts-de-France">Généachtimi</a> et 
			<a href="https://archivesdepartementales.lenord.fr/" title="Site officiel des archives départementales du Nord">Archives du Nord</a>)</figcaption>
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

<!-- JS pour le Carrousel des archives -->
<script src="../js/archives.js"></script>

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