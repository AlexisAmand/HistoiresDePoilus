<!doctype html>
<html lang="fr">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Le monument aux morts de Grand-Fayt - Histoires de Poilus</title>
    <meta content="Le monument aux morts pour la France pendant la Première Guerre Mondiale (1914-1918) à Grand-Fayt" name="description">

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
            <?php include('../include/nav-tombes.inc'); ?>
        </div>

    </aside>

    <article id="article">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Accueil</a></li>
            <li class="breadcrumb-item"><a href="../tombes.php">Tombes de soldats</a></li>
            <li class="breadcrumb-item active" aria-current="page">Les tombes de Grand-Fayt</li>
        </ol>
    </nav>

    <span onclick="fonctiontest();" id="asidebouton"><i class="fas fa-bars"></i>&nbsp;Afficher la liste des villes</span>

    <h1 class="my-4">Le monument aux morts de Grand-Fayt</h1>

        <figure class="text-center">
            <a href="images/grand-fayt-02.jpg" data-fancybox="gallery" data-caption="Le monument aux Morts de Grand-Fayt (Nord)">
            <img src="images/mini/grand-fayt-02.jpg" alt="le Monument aux Morts de Grand-Fayt dans l'Avesnois"/></a>
            <figcaption class="figure-caption">Le monument aux morts de Grand-Fayt<br />(Source: Photo privée)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grand-fayt-01.jpg" data-fancybox="gallery" data-caption="Le monument aux Morts de Grand-Fayt (Nord)">
            <img src="images/mini/grand-fayt-01.jpg" alt="le Monument aux Morts de Grand-Fayt dans l'Avesnois"/></a>
            <figcaption class="figure-caption">Le monument aux morts de Grand-Fayt<br />(Source: Photo privée)</figcaption>
        </figure>

        <figure class="text-center">
            <a href="images/grand-fayt-03.jpg" data-fancybox="gallery" data-caption="Le monument aux Morts de Grand-Fayt (Nord)">
            <img src="images/mini/grand-fayt-03.jpg" alt="le Monument aux Morts de Grand-Fayt dans l'Avesnois"/></a>
            <figcaption class="figure-caption">Le monument aux morts de Grand-Fayt<br />(Source: Photo privée)</figcaption>
        </figure>

        <?php /* TODO : mettre liste des soldats + faire lien sur index des noms */ ?>

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

<!-- Affiche/Masque le aside -->

<script>
function fonctiontest() {
  if (AsideVisible == 1)
    {
    /*
    document.getElementById("aside").style.visibility = "visible";
    */
    document.getElementById("aside").style.display="block";
    document.getElementById("aside").style.width="20%";
    document.getElementById("article").style.width="80%";
    document.getElementById("asidebouton").innerHTML = "<i class='fas fa-bars'></i>&nbsp;Masquer la liste des villes";

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
    document.getElementById("asidebouton").innerHTML = "<i class='fas fa-bars'></i>&nbsp;Afficher la liste des villes";

    AsideVisible = 1;
    }
}

</script>

<!-- Traitement du formulaire de contact -->

<?php

if (isset($_POST['nom']) and isset($_POST['courriel']) and isset($_POST['message']))
    {
    echo "plop !<br />";
    ?>

    <script type="text/javascript">
    $( document ).ready(function() {
        $('#myModal').modal('toggle');
    });
    </script>

    <?php
    $to  = 'alexis.amand@gmail.com, '.$_POST['courriel'];

    // Sujet
    $subject = 'Message de Histoires de Poilus';

    // message
    $message = "Nom : ".$_POST['nom']."<br />"
                ."Sujet : ".$_POST['sujet']."<br />"
                ."E-mail : ".$_POST['courriel']."<br />"
                ."Message : "."<br />".$_POST['message']."<br />";

                // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
                $headers = 'MIME-Version: 1.0'."\n";
                $headers .= 'Content-type: text/html; charset=utf-8'."\n";
                $headers .='From: "Message de Histoires de Poilus"<'.$_POST['courriel'].'>'."\n";

                $envoyer = mail($to, $subject, $message, $headers);

                if (!$envoyer)
                    {
                    echo '<p class="alert alert-warning" role="alert">erreur !</p>';
                    $errorMessage = error_get_last()['message'];
                    echo $errorMessage;
                    }
                else
                    {

                    ?>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Me contacter</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body">
                            <div class="alert alert-success">message envoyé !</div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                        </div>
                        </div>
                    </div>
                    </div>

                    <?php

                    }
    }

    ?>

<!-- Affiche la modale de contact -->

<form method="POST">

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Me contacter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row align-items-center">
            <div class="col-6">

                <div class="form-group">
                    <label>Nom (*)</label>
                    <input type="text" name="nom" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Courriel (*)</label>
                    <input type="text" name="courriel" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Message (*)</label>
                    <textarea name="message" class="form-control" rows="5" required></textarea>
                </div>

                <p>(*) Tous les champs doivent être complétés</p>

            </div>
            <div class="col-6">
                <div class="row text-center">
                    <div class="col-12 my-3">
                        <h6><i class="fas fa-map-marker-alt"></i>&nbsp;Adresse</h6>
                        <p>Valenciennes<br />
                        Nord, France</p>
                    </div>
                    <div class="col-12 my-3">
                        <h6><i class="far fa-address-card"></i>&nbsp;Me contacter</h6>
                        <p>00.12.34.56.78<br />
                        contact@supermail.com<br />
                        Ou <a href="#" target="_blank">via Skype</a></p>
                    </div>
                </div>
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
        <button class="btn btn-primary" type="submit" name="formcontact">Envoyer</button>
      </div>
    </div>
  </div>
</div>

</form>

<!-- code pour Matomo modifié pour prendre en compte Tarteaucitron.js -->

<script type="text/javascript">
  tarteaucitron.user.matomoId = 4;
  tarteaucitron.user.matomoHost = '//www.genealexis.fr/piwik/';
  (tarteaucitron.job = tarteaucitron.job || []).push('matomohightrack');
</script>

</body>
</html>
