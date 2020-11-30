<!doctype html>
<html lang="fr">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Test HdP</title>
    <meta content=" " name="description"/>

    <link rel="stylesheet" href="css/style.css" media="all">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="images/favicon.png"/>

</head>

<body>

<!-- menu de navigation -->

<div class="container-fluid" style="background-color: #364046;">

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                <img src="../images/logo.png" class="logo" alt="Logo du site Histoires de Poilus"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-auto" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Les Poilus
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
                        Les Hôpitaux
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
                        Les Camps
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Rubrique 3.1</a>
                            <a class="dropdown-item" href="#">Rubrique 3.2</a>
                            <a class="dropdown-item" href="#">Rubrique 3.3</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Les Batailles
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Rubrique 4.1</a>
                            <a class="dropdown-item" href="#">Rubrique 4.2</a>
                            <a class="dropdown-item" href="#">Rubrique 4.3</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Les Ressources
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Rubrique 5.1</a>
                            <a class="dropdown-item" href="#">Rubrique 5.2</a>
                            <a class="dropdown-item" href="#">Rubrique 5.3</a>
                        </div>
                    </li>
                    </ul>
                </div>
            </nav>

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

        <h1 class="my-4">Titre de la page</h1>

        <?php 

        if (isset($_POST['nom']) and isset($_POST['sujet']) and isset($_POST['courriel']) and isset($_POST['message']))
            {
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
				    		echo '<p class="alert alert-success" role="alert">Votre message a bien été envoyé.</p>';
				    		}
			    				
            }

        ?>

        <p>Vous pouvez me contacter via les réseaux sociaux :</p>

        <p>Facebook : <a href="#">https://www.facebook.com/genealexis.fr</a><br />
        Twitter : <a href="#">https://twitter.com/alexisamand</a></p>

        <p>Par mail : alexis.amand@gmail.fr</p>

        <p>Ou encore en utilisant ce formulaire :</p>

        <form action="contact.php" method="POST">

        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label>Nom (*)</label>
            <input type="text" name="nom" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
            <label>Courriel (*)</label>
            <input type="text" name="courriel" class="form-control" required>
            </div>
        </div>

        <div class="form-group">
        <label>Sujet (*)</label>
        <input type="text" name="sujet" class="form-control" required>
        </div>

        <div class="form-group">
        <label>Message (*)</label>
        <input type="text" name="message" class="form-control" required>
        </div>

        <p>(*) Tous les champs doivent être complétés</p>

        <div class="row">

        <button class="btn btn-primary ml-auto" type="submit" name="formcontact">Envoyer</button>
            
        </div>    

        </form>
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
</body>
</html>