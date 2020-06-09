<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.perso.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">

    <!-- CSS perso -->
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>

    <title>Test avec Boostrap 4.5</title>

    <style>

    body {
        color: #3b4247;
  font-family: 'Open Sans',sans-serif;
  font-size: 0.8em;
    }

    .container {
        max-width:990px;
    }

    h1 {
        font-size: 2em;
        margin-top: 25px;
    }

    h2 {
        font-size: 1.5em;
        margin-bottom: 12px;
    }

    #rezo {
        float:right;
        padding-right:15px;
        font-size:2.6em;
        color:#e2ede4;
    }

    #rezo a:link, a:visited {
        color:#e2ede4;
    }

    #rezo  a:hover {
        color:#efefef;
    }

    nav {
        /* background-color:#364046; */
    }

    nav a:link,nav a:visited {
        /* float:right; */
        /* display:block; */
        background-color:#5b5b5b;
        width:100px;
        padding:8px;
        text-align:center;
        margin-left:3px;
        text-decoration:none;
    }

    nav a:hover {
        float:right;
        display:block;
        width:100px;
        padding:8px;
        text-align:center;
        margin-left:3px;
        color:#5b5b5b;
        background-color:#e2ede4;
        text-decoration:none;
    }
    
    nav a.NavSelected {
        height:30px;
        background-color:#eFeFeF;
        color:#5b5b5b;
    }

    .navbar-light .navbar-nav .active a {
        background-color: #eeeeee;
    }
    
    /* bootstrap */

    .bg-light {
        background-color: #364046!important;
    }

    .navbar-light .navbar-nav .nav-link {
        color:#e2ede4;
    }

    .navbar-light .navbar-nav .active {
        color:#eeeeee;
    }

    /* Footer */ 

    footer {
        background-color:#3b4247;
        /* text-align:center; */
        padding-top:15px;
        padding-bottom:15px;
        color:#e2ede4;
        font-size:0.9em;
        /*
        width:960px;
        margin-left:auto;
        margin-right:auto
        */
    }

    footer a:link, footer a:visited,footer a:hover {
        color:#e2ede4;
        text-decoration:none;
    }

    @media screen and (min-width: 990px) {
        .navbar-light .navbar-nav .nav-link {
            width:115px;
        }
    }

    @media screen and (max-width: 989px) {
        .navbar-light .navbar-nav .nav-link {
            width:100%;
        }
    }

    #colindex {
        -moz-column-count:2;
        -webkit-column-count:2;
        -o-column-count:2;
        column-count:2;
        -moz-column-gap:40px;
        -webkit-column-gap:40px;
        -o-column-gap:40px;
        column-gap:40px;
        -webkit-column-rule-width:1px;
        -webkit-column-rule-color:silver;
        -webkit-column-rule-style:dashed;
        -moz-column-rule-width:1px;
        -moz-column-rule-color:silver;
        -moz-column-rule-style:dashed;
        -o-column-rule-width:1px;
        -o-column-rule-color:silver;
        -o-column-rule-style:dashed;
        column-rule-width:1px;
        column-rule-color:silver;
        column-rule-style:dashed;
        /* text-align:justify */
    }

    #colindex img {
        box-shadow:1px 1px 12px #555;
        }

    #colindex figure {
        text-align:center;
        color:#363535;
        margin-bottom:35px;
        }

    </style>

  </head>
  <body style="background-attachment:fixed;background-repeat:repeat;background-position:center top;background-image:url(images/fond.jpg);">

    <div class="container" style="background-color: #efefef">

        <!-- Row pour le header -->

        <div class="row" style="height: 175px;background-color: #364046;">

            <div class="col-6 align-self-center text-center">

                <a href="index.php" title="retour sur la page d'accueil du site">
                <img src="images/logo.png" class="logo" alt="Logo du site Histoires de Poilus"/></a>

            </div>

            <div class="col-6 align-self-top text-right" id="rezo">

                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-linkedin"></i>

            </div>

        </div>

        <div class="row" style="background-color: #364046;">

        <div class="col-12">

        <!-- navigation -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Les Poilus <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Les Hôpitaux</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Les Tombes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Les camps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Les Batailles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Les Ressources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        </div>

        </div>

        <div class="row">

            <div class="col-12">

            <h1>Edito</h1>

            <div class="col-12" id="colindex">

            <p class="text-justify">A l'origine, je devais continuer ma série d'articles sur le thème de la Première Guerre Mondiale en vous parlant de mes poilus sur mon site <a href="http://www.genealexis.fr">Genealexis</a>. Mouais… dit comme ça, je m'aperçois que c'est loin d'être génial.</p>

            <figure>
                <img src="images/image-diapo-1.jpg" alt="Affiche pour la mobilisation générale" />
            </figure>

            <p class="text-justify">J'aurais certainement pu trouver une autre façon d'introduire la chose ? Peut-être que la solution était de vous raconter comment certains hommes de ma famille sont partis la fleur au fusil pour une guerre qu'ils pensaient courte ? Je suis désolé, mais je ne veux pas rentrer dans ce jeu-là.</p>

            <figure>
                <img src="images/image-diapo-2.jpg" alt="Fiche de mort pour la France issue du site Mémoire des Hommes" />
            </figure>
            
            <p class="text-justify">Aucun spécialiste de ce conflit, n'arrivera à me faire croire que des hommes dans la fleur de l'âge ont quitté leurs maisons, leurs travails, leurs femmes,  leurs enfants, leurs amis “avec plaisir”, je dirais plutôt qu'ils s'y étaient résignés. En 1994, Jean-Baptiste DUROSELLE (historien français) écrit: <i>« Qui va faire la moisson imminente ? Et comment, avec la réquisition de nombreux chevaux, pourra-t-on labourer en octobre, si toutefois, par impossible, la guerre n'est pas encore gagnée et terminée ? »</i>. Il y a bien eu des scènes festives, avec des wagons et des fusils fleuris, mais c'est surtout dû au fait que le  départ des troupes était fortement ritualisé: discours d'officiers, défilés dans la ville des casernes aux gares. Il ne faut pas oublier non plus que  la <strong>loi sur l'état de siège du 3 avril 1878</strong> attribue aux autorités militaires un large pouvoir, en particulier celui de sanctionner toute parole opposée à la guerre. On peut donc facilement comprendre que les mobilisés et les civils n'avaient pas vraiment le choix, mieux valait dire que l'on était “pour la guerre”. Si vous n'êtes pas convaincus, je vous invite à lire le mémoire d'Yves POURCHER intitulé <a href="http://terrain.revues.org/1027#txt">Les clichés de la Grande Guerre</a>.</p>

            <figure>
                <img src="images/image-diapo-3.jpg" alt="Carte postale représentant le départ des soldats pour le Front" />
            </figure>

            <p class="text-justify">Je vous propose donc, à travers ce site, un résumé des découvertes que j'ai eu la chance de réaliser à propos des membres de ma famille qui ont participé à la Première Guerre Mondiale. Vous allez ainsi découvrir que <a href="camps.php" title="Les camps de prisonniers pendant la Grande Guerre">certains prisonniers</a> et emmenés en Allemagne, que certains ont été blessés en défendant leur patrie et enfin que <a href="tombes.php">d'autres sont morts pour leur patrie</a>. Ce site est avant toute chose là pour rendre hommage à tous les soldats de la Der des Der, qu'ils soient <em>Poilus</em> en France, <em>Landsers</em> en Allemagne, <em>Tommies</em> en Angleterre, <em>Diggers</em> en Australie, <a href="poilus/amand-jules.php" title="biographies de soldats belges de la Première Guerre Mondiale">Jass en Belgique</a>, <em>Sammies</em> aux États-Unis ou encore <em>Mehmetçik</em> en Turquie (Empire Ottoman).</p>

            <p class="text-right">Bonne lecture,<br>Alexis AMAND<br>(généalogiste et webmaster)</p>

            </div>

        </div>

    </div>

    <footer class="text-center"><?php include('include/footer.inc'); ?></footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>