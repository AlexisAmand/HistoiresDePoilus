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

    <link rel="stylesheet" href="css/style.dev.css" media="all">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="images/favicon.png"/>

    <!-- Initialisation d'une variable pour masquer/afficher le menu -->

    <script>
    AsideVisible = 1;
    </script>

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

  <div class="container-fluid" style="background-color: #364046;">

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

    <aside id="aside" style="display:none;">

        <div class="list-group">

            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>
            <a href="#" class="list-group-item menutest">Lien vers page</a>

        </div>

    </aside>

    <article style="width:100%;padding-left:15px;padding-right:15px;" id="article" >

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item"><a href="#">Rubrique</a></li>
            <li class="breadcrumb-item active" aria-current="page">Titre de la page</li>
        </ol>
    </nav>

    <span onclick="fonctiontest();" id="asidebouton"><i class="fas fa-bars"></i>&nbsp;Afficher la liste des noms</span>

    <h1 class="my-4">Titre de la page</h1>

        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

        <figure class="text-center">
            <img src="https://via.placeholder.com/450x264.png" alt=" "  class="figure-img img-fluid"/>
            <figcaption class="figure-caption">Légende de l'image</figcaption>
        </figure>

        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

        <figure class="text-center">
            <img src="https://via.placeholder.com/450x264.png" alt=" "  class="figure-img img-fluid"/>
            <figcaption class="figure-caption">Légende de l'image</figcaption>
        </figure>

        <p class="text-justify">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>

        <figure class="text-center">
            <img src="https://via.placeholder.com/450x264.png" alt=" "  class="figure-img img-fluid"/>
            <figcaption class="figure-caption">Légende de l'image</figcaption>
        </figure>

        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

    </article>

    </section>

</div>

<!-- pied de page -->

<div class="container-fluid" style="background-color: #364046;">

    <div class="container">

    <footer class="row">
        <?php include('include/footer.inc'); ?>
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