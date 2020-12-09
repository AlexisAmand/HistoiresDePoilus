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

                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse mx-auto" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Les Poilus
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="poilus.php">A propos des poilus</a>
                                <a class="dropdown-item" href="poilus/lacourt-onesime.php">Les poilus des Ardennes</a>
                                <a class="dropdown-item" href="poilus/amand-hoche.php">Les poilus des Nord</a>
                                <a class="dropdown-item" href="poilus/arnould-gaston.php">Les poilus de la Marne</a>
                                <a class="dropdown-item" href="poilus/FROIDUROT-Alfred.php">Les poilus de la Côte-d'Or</a>
                                <a class="dropdown-item" href="poilus/amand-jules.php">Les jasses de Belgique</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Les Hôpitaux
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="hopitaux/hopitaux.php">Le système de santé pendant la Grande Guerre</a>
                                <a class="dropdown-item" href="hopitaux/hopitaux-59.php">Les hôpitaux du Nord</a>
                                <a class="dropdown-item" href="hopitaux/hopitaux-62.php">Les hôpitaux du Pas-de-Calais</a>
                                <a class="dropdown-item" href="hopitaux/hopitaux-80.php">Les hôpitaux de la Marne</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tombes.php">Les Tombes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Les Camps
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="camps.php">Les camps de prisonniers en Allemagne</a>
                                <a class="dropdown-item" href="camps-nl/camps-internements.php">Les camps d'internement aux Pays-Bas</a>
                                <a class="dropdown-item" href="camps-s/internement-suisse.php">Les camps d'internement en Suisse</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Les Batailles
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="batailles/batailles-est.php">L'Europe de l'Est</a>
                                <a class="dropdown-item" href="batailles/batailles-ouest.php">L'Europe de l'Ouest</a>
                                <a class="dropdown-item" href="batailles/batailles-italie.php">Le Front Italien</a>
                                <a class="dropdown-item" href="batailles/batailles-afrique.php">Le Front Africain</a>
                                <a class="dropdown-item" href="batailles/batailles-orient.php">Le Front du Moyen-Orient</a>
                                <a class="dropdown-item" href="batailles/batailles-balkans.php">Le Front des Balkans</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Les Ressources
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="bibliographie.php">Les ressources bibliographiques</a>
                                <a class="dropdown-item" href="webographie.php">Les ressources en ligne</a>
                            </div>
                        </li>
                        </ul>
                    </div>
                </nav>

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
