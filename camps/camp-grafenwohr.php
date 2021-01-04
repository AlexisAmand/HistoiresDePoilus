<!doctype html>
<html lang="fr">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title> </title>
    <meta content=" " name="description"/>

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
            <li class="breadcrumb-item"><a href="../index.php">Accueil</a></li>
            <li class="breadcrumb-item"><a href="../camps.php">Les camps allemands</a></li>
            <li class="breadcrumb-item active" aria-current="page">Le camp de Grafenwöhr</li>
        </ol>
    </nav>

    <span onclick="afficheMenu();" id="asidebouton"><i class="fas fa-bars"></i>&nbsp;Afficher la liste des camps</span>

    <h1 class="my-4">Le camp de prisonniers de Grafenwöhr</h1>

        <p class="text-justify"><em><strong>Mise en garde:</strong> Certaines photographies portent la mention "source allemande", cela signifie qu'elles sont issues d'ouvrages ou d'archives allemandes et qu'elles ne sont donc pas très objectives.</em></p><p class="text-justify">Dans son ouvrage intitulé <cite>Août 1914. La Bataille de Sarrebourg</cite>, Joseph ELMERICH précise que la Bavière, qui avait fourni sa propre armée, avait préparé trois camps destinés à recevoir les prisonniers: le <a href="camp-lechfeld.php" title="lien vers la page consacrée au camp de Lechfeld">camp de Lechfeld</a> (3600 prisonniers), le <a href="camp-hammelburg.php" title="lien vers la page consacrée au camp de Hammelburg">camp de Hammelburg</a> (4470 prisonniers) et enfin celui de Grafenwöhr (10500 prisonniers).</p>

        <figure class="text-center">
            <a href="images/Grafenwohr/localisation-grafenwohr.jpg" data-fancybox="gallery" data-caption="Localisation du camp de Grafenwöhr">
            <img src="miniatures/Grafenwohr/localisation-grafenwohr.jpg" class="figure-img img-fluid img-thumbnail" alt="carte de l'Allemagne pour localiser le camp de prisonniers de Grafenwöhr"></a>
            <figcaption class="figure-caption">Localisation du camp de Grafenwöhr<br />(source pour le fond de carte: BNF - Gallica)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-01.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-01.jpg" class="figure-img img-fluid img-thumbnail" alt="le courrier français au camp de Grafenwöhr pendant la Grande Guerre"></a>
            <figcaption class="figure-caption">Le courrier français<br />(source allemande)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-02.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-02.jpg" class="figure-img img-fluid img-thumbnail" alt="La poste aux colis du camp de prisonnier de Grafenwöhr pendant la Première Guerre Mondiale"></a>
            <figcaption class="figure-caption">La poste aux colis<br />(source allemande)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-03.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-03.jpg" class="figure-img img-fluid img-thumbnail" alt="Les achats au camp de prisonnier de Grafenwöhr pendant la Première Guerre Mondiale"></a>
            <figcaption class="figure-caption">Endroit où se font les achats pour les cantines<br />(source allemande)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-04.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-04.jpg" class="figure-img img-fluid img-thumbnail" alt="la préparation des vivres par les prisonniers du camp de Grafenwöhr"></a>
            <figcaption class="figure-caption">On prépare les vivres reçus de chez soi<br />(source allemande)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-05.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-05.jpg" class="figure-img img-fluid img-thumbnail" alt="des prisonniers prennent leur bain dans l'étang au camp de Grafenwöhr"></a>
            <figcaption class="figure-caption">Le bain dans l'étang<br />(source allemande)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-06.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-06.jpg" class="figure-img img-fluid img-thumbnail" alt="les douches du camp de Grafenwöhr pendant la Grande Guerre"></a>
            <figcaption class="figure-caption">Les douches au camp<br />(source allemande)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-07.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-07.jpg" class="figure-img img-fluid img-thumbnail" alt="L'établissement de bains chauds au camp de Grafenwöhr"></a>
            <figcaption class="figure-caption">L'établissement de bains chauds<br />(source allemande)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-08.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-08.jpg" class="figure-img img-fluid img-thumbnail" alt="Personnel auxiliaire du bureau de poste et de la cantine dans le camp de Grafenwöhr"></a>
            <figcaption class="figure-caption">Personnel auxiliaire du bureau de poste et de la cantine<br />(source allemande)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-09.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-09.jpg" class="figure-img img-fluid img-thumbnail" alt="des prisonniers de retour du travail au camp de Grafenwöhr"></a>
            <figcaption class="figure-caption">Le retour du travail<br />(source allemande)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-10.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-10.jpg" class="figure-img img-fluid img-thumbnail" alt="Travaux de jardinage au camp de prisonnier de Grafenwöhr pendant la Première Guerre Mondiale"></a>
            <figcaption class="figure-caption">Travaux de jardinage<br />(source allemande)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-12.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-12.jpg" class="figure-img img-fluid img-thumbnail" alt="des prisonniers français dans le camp de Grafenwöhr pendant la Grande Guerre"></a>
            <figcaption class="figure-caption">Dans le camp des prisonniers français<br />(source allemande)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-13.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-13.jpg" class="figure-img img-fluid img-thumbnail" alt="un appareil photo au camp de Grafenwöhr pendant la Première Guerre Mondiale"></a>
            <figcaption class="figure-caption">Le premier appareil photographique<br />(source allemande)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grafenwohr-14.jpg" data-fancybox="gallery" data-caption="Le camp de prisonniers de Grafenwöhr">
            <img src="miniatures/grafenwohr-14.jpg" class="figure-img img-fluid img-thumbnail" alt="Concert et théâtre à l'hôpital du camp de prisonniers de Grafenwöhr pendant la Grande Guerre"></a>
            <figcaption class="figure-caption">Concert et théâtre à l'hôpital<br />(source allemande)</figcaption>
        </figure>

        <p class="text-justify">En 1928, la nécropole de Sarrebourg, en Lorraine, accueille le Géant Enchaîné, une oeuvre en provenance du cimetière français du camp de prisonniers de Grafenwöhr et réalisée par le sculpteur Frédéric STOLL, soldat du 347e R.I</p>

        <h2>Sources et bibliographie</h2>

        <ul>
            <li><a href="http://amzn.to/2uBK1k3" title="Le livre prisonniers 1914-1918 par Jean-Paul Briastre" target="_blank">
            Prisonniers 1914-1918 (Jean-Paul Briastre, 2013)</a></li>
            <li><a href="../pdf/FoXIIa1133_qt.pdf" target="_blank" title=" Kriegsgefangenen in Deutschland, livre sur les camps de prisonniers écrit par Hermann Montanus en 1915">Kriegsgefangenen in Deutschland</a> (Hermann Montanus, 1915)</li>
            <li><a href="https://amzn.to/2MTTkR9" target="_blank"  title="Livre sur les prisonniers de guerre dans l'histoire">
            Les prisonniers de guerre dans l'histoire : Contacts entre peuples et cultures</a></li>
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