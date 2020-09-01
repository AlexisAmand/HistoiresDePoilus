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
            
            <hgroup class="text-center col-12">
                <a href="../index.php" title="Retour sur la page d'accueil du site">
		        <img src="../images/logo.png" class="logo" alt="Logo du site Histoires de Poilus"/></a>
            </hgroup>

            <?php
            /* Récupération de l'url de la page en cours */
            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
            ?>
            
            <!--div class="col-md-6 text-right align-self-top order-1 order-md-6 col-12" id="reseaux">
                <a href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>" title="Partager cette page sur Facebook">
                <i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/alexisamand/" title="Voir le compte Instagram du webmaster">
                <i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>" title="Partager cette page sur Twitter">
                <i class="fab fa-twitter-square"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>" title="Partager cette page sur LinkedIn"> 	
                <i class="fab fa-linkedin"></i></a>
            </div-->

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
                    Rubrique 1
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                    <a class="dropdown-item" href="#">Rubrique 1.1</a>
	                    <a class="dropdown-item" href="#">Rubrique 1.2</a>
	                    <a class="dropdown-item" href="#">Rubrique 1.3</a>
	                    <a class="dropdown-item" href="#">Rubrique 1.4</a>
	                    <a class="dropdown-item" href="#">Rubrique 1.5</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Rubrique 2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	                    <a class="dropdown-item" href="#">Rubrique 2.1</a>
	                    <a class="dropdown-item" href="#">Rubrique 2.2</a>
	                    <a class="dropdown-item" href="#">Rubrique 2.3</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Les Tombes</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Rubrique 3
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Rubrique 3.1</a>
	                    <a class="dropdown-item" href="#">Rubrique 3.2</a>
	                    <a class="dropdown-item" href="#">Rubrique 3.3</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Rubrique 4
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Rubrique 4.1</a>
	                    <a class="dropdown-item" href="#">Rubrique 4.2</a>
	                    <a class="dropdown-item" href="#">Rubrique 4.3</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Rubrique 5
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Rubrique 5.1</a>
	                    <a class="dropdown-item" href="#">Rubrique 5.2</a>
	                    <a class="dropdown-item" href="#">Rubrique 5.3</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Rubrique 6</a>
                </li>
                </ul>
		  </div>
		</nav>
		
		</div>
	
        <section class="row">

            <article class="col-12">

            <h1 class="my-4">Edito</h1>

            <div class="edito2col">

                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                
                <figure>
                    <img src="https://via.placeholder.com/264x173.png" alt=" "  class="mx-auto d-block"/>
                </figure>

                <p class="text-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                <figure>
                    <img src="https://via.placeholder.com/264x173.png" alt=" " class="mx-auto d-block"/>
                </figure>
                
                <p class="text-justify">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>

                <figure>
                    <img src="https://via.placeholder.com/264x173.png" alt=" "  class="mx-auto d-block"/>
                </figure>

                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                <p class="text-right">Bonne lecture,<br />Alexis AMAND<br />(généalogiste et webmaster)</p>

            </div>

            </article>

        </section>

        <footer class="row">
            <?php include('include/footer.inc'); ?>
        </footer>

        <?php include('include/stats.inc'); ?>

        </div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>