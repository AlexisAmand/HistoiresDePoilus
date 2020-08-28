<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
    <meta content=" " name="description"/>

    <link rel="stylesheet" href="css/style.css" media="all">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="images/favicon.png"/>

  </head>
  <body>

    <div class="container">
    
        <header class="row" style="background-color: #364046;height: 175px;">
            
            <hgroup class="col-md-6 text-center align-self-center order-2 order-md-1 col-12">
                <a href="../index.php" title="Retour sur la page d'accueil du site">
		        <img src="../images/logo.png" class="logo" alt="Logo du site Histoires de Poilus"/></a>
            </hgroup>
            
            <div class="col-md-6 text-right align-self-top order-1 order-md-6 col-12" id="reseaux">
                <a href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>" title="Partager cette page sur Facebook">
                <i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/alexisamand/" title="Voir le compte Instagram du webmaster">
                <i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>" title="Partager cette page sur Twitter">
                <i class="fab fa-twitter-square"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>" title="Partager cette page sur LinkedIn"> 	
                <i class="fab fa-linkedin"></i></a>
            </div>

        </header>

		<div class="row" style="background-color: #364046;">
        	  	  
	  	<nav class="navbar navbar-expand-lg navbar-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Les Poilus
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                    <a class="dropdown-item" href="#">Les poilus des Ardennes</a>
	                    <a class="dropdown-item" href="#">Les poilus du Nord</a>
	                    <a class="dropdown-item" href="#">Les poilus Marne</a>
	                    <a class="dropdown-item" href="#">Les poilus de la Côte-d'Or</a>
	                    <a class="dropdown-item" href="#">Les jasses de Belgique</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Les Hôpitaux
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                    <a class="dropdown-item" href="#">Les hôpitaux du Nord</a>
	                    <a class="dropdown-item" href="#">Les hôpitaux du Pas-de-Calais</a>
	                    <a class="dropdown-item" href="#">Les hôpitaux de la Somme</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Les Tombes</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Les Camps
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                    <a class="dropdown-item" href="#">Les camps de prisonniers en Allemagne</a>
	                    <a class="dropdown-item" href="#">Les camps d'internement aux Pays-Bas</a>
	                    <a class="dropdown-item" href="#">Les camps d'internement en Suisse</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Les Batailles
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                    <a class="dropdown-item" href="#">Action</a>
	                    <a class="dropdown-item" href="#">Another action</a>
	                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Les Ressources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                    <a class="dropdown-item" href="#">Les ressources bibliographiques</a>
	                    <a class="dropdown-item" href="#">Les ressources en ligne</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                </ul>
		  </div>
		</nav>
		
		</div>
	
        <section class="row">

            <article class="col-12">

            <h1 class="my-4">Edito</h1>

            <div class="edito2col">

                <p class="text-justify">A l'origine, je devais continuer ma série d'articles sur le thème de la Première Guerre Mondiale en vous parlant de mes poilus sur mon site <a href="http://www.genealexis.fr" title="Généalogie de la famille AMAND et de ses alliances">Genealexis</a>. Mouais… dit comme ça, je m'aperçois que c'est loin d'être génial.</p>
                
                <figure>
                    <img src="../images/image-diapo-1.jpg" alt="Affiche pour la mobilisation générale d'Aout 1914"  class="mx-auto d-block"/>
                </figure>

                <p class="text-justify">J'aurais certainement pu trouver une autre façon d'introduire la chose ? Peut-être que la solution était de vous raconter comment certains hommes de ma famille sont partis la fleur au fusil pour une guerre qu'ils pensaient courte ? Je suis désolé, mais je ne veux pas rentrer dans ce jeu-là.</p>

                <figure>
                    <img src="../images/image-diapo-2.jpg" alt="Fiche de mort pour la France issue du site Mémoire des Hommes" class="mx-auto d-block"/>
                </figure>
                
                <p class="text-justify">Aucun spécialiste de ce conflit, n'arrivera à me faire croire que des hommes dans la fleur de l'âge ont quitté leurs maisons, leurs travails, leurs femmes,  leurs enfants, leurs amis “avec plaisir”, je dirais plutôt qu'ils s'y étaient résignés. En 1994, Jean-Baptiste DUROSELLE (historien français) écrit: <em>« Qui va faire la moisson imminente ? Et comment, avec la réquisition de nombreux chevaux, pourra-t-on labourer en octobre, si toutefois, par impossible, la guerre n'est pas encore gagnée et terminée ? »</em>. Il y a bien eu des scènes festives, avec des wagons et des fusils fleuris, mais c'est surtout dû au fait que le  départ des troupes était fortement ritualisé: discours d'officiers, défilés dans la ville des casernes aux gares. Il ne faut pas oublier non plus que  la <strong>loi sur l'état de siège du 3 avril 1878</strong> attribue aux autorités militaires un large pouvoir, en particulier celui de sanctionner toute parole opposée à la guerre. On peut donc facilement comprendre que les mobilisés et les civils n'avaient pas vraiment le choix, mieux valait dire que l'on était “pour la guerre”. Si vous n'êtes pas convaincus, je vous invite à lire le mémoire d'Yves POURCHER intitulé <a href="http://terrain.revues.org/1027#txt" title="Les clichés de la Grande Guerre, mémoire écrit par Yves POURCHER">Les clichés de la Grande Guerre</a>.</p>

                <figure>
                    <img src="../images/image-diapo-3.jpg" alt="Carte postale représentant le départ des soldats pour le Front"  class="mx-auto d-block"/>
                </figure>

                <p class="text-justify">Je vous propose donc, à travers ce site, un résumé des découvertes que j'ai eu la chance de réaliser à propos des membres de ma famille qui ont participé à la Première Guerre Mondiale. Vous allez ainsi découvrir que <a href="camps.php" title="Les camps de prisonniers pendant la Grande Guerre">certains prisonniers</a> et emmenés en Allemagne, que certains ont été blessés en défendant leur patrie et enfin que <a href="tombes.php" title="Tombes de soldats morts pour la France pendant la Première Guerre Mondiale">d'autres sont morts pour leur patrie</a>. Ce site est avant toute chose là pour rendre hommage à tous les soldats de la Der des Der, qu'ils soient <em>Poilus</em> en France, <em>Landsers</em> en Allemagne, <em>Tommies</em> en Angleterre, <em>Diggers</em> en Australie, <a href="poilus/amand-jules.php" title="biographies de soldats belges de la Première Guerre Mondiale">Jass en Belgique</a>, <em>Sammies</em> aux États-Unis ou encore <em>Mehmetçik</em> en Turquie (Empire Ottoman).</p>

                <p class="text-right">Bonne lecture,<br />Alexis AMAND<br />(généalogiste et webmaster)</p>

            </div>

            </article>

        </section>

        <footer class="row"><?php include('include/footer.inc'); ?></footer>

        <?php include('include/stats.inc'); ?>

        </div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>