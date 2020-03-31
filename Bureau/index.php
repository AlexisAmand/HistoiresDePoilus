<!doctype html>
<html lang="fr">

    <head>

        <meta charset="utf-8">
        <title>Histoires de Poilus</title>

        <meta content="Biographies de poilus qui ont participé à la Première Guerre Mondiale de 1914 à 1918. Divers relevés de morts pour la France. Présentation de divers camps de prisonniers allemands." name="description">
        <meta name="google-site-verification" content="NrJvg2SL3r8GToGISpF-SJatGnKIvS5mekxb-2uTef4" />

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/resp.css">
        <link rel="stylesheet" href="css/fontawesome/css/all.min.css">  

        <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
        
        <link href="https://fonts.googleapis.com/css?family=Calligraffitti&display=swap" rel="stylesheet"> 
        
        <link rel="icon" type="image/png" href="images/favicon.png" />
        
        <style>
        
        figure {
			text-align: center;
			color: #363535;
			margin-bottom: 20px;
			font-family: 'Calligraffitti', cursive;
			font-size: 19px;
		}
		
		</style>

    </head>

    <body>

    <!-- code js pour l'avertissement sur les cookies -->

    <script src="js/cookiechoices.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsentBar('En naviguant sur le site, vous acceptez l'utilisation de cookies pour vous proposer une navigation optimale et me permettre de réaliser des statistiques de visites.',
    'Ok', 'En savoir plus', 'cookies.php');
    });
    </script>

    <?php include('include/resp.inc'); ?>

    <header>

        <?php include('include/social.inc'); ?>

        <a href="index.php" title="retour sur la page d'accueil du site">
        <img src="images/logo.png" class="logo" alt="Logo du site Histoires de Poilus"/></a>

    </header>

    <nav>
        <a href="contact.php" style="width: 18px;margin-right: 3px;"><i class="far fa-envelope"></i></a>
        <a href="webographie.php">Les Ressources</a>
        <a href="lieux.php">Les Batailles</a>
        <a href="camps.php">Les Camps</a>
        <a href="tombes.php">Les Tombes</a>
        <a href="hopitaux/hopitaux.php">Les Hôpitaux</a>
        <a href="civils.php">Les civils</a>
        <a href="poilus.php">Les Poilus</a>
    </nav>

    <section>

        <article style="margin-left:10px;margin-top: 20px;">

          <div style="width:33%;transform: rotate(-10deg);float:left;text-align:center;width:300px;box-shadow: 1px 1px 12px #555;background-color:white;">
          	
          	<figure>
          		<img src="test/image02.jpg" style="width: 270px;box-shadow: none;">
          		<br />
          		<caption><a href="#" style="text-decoration:none;">L'édito</a></caption>
          	</figure>
          	
          </div>
          
          <div style="width:33%;transform: rotate(8deg);float:left;text-align:center;width:300px;box-shadow: 1px 1px 12px #555;background-color:white;">
          	
          	<figure>
          		<img src="test/image01.jpg" style="width: 270px;box-shadow: none;">
          		<br />
          		<caption>Les civils</caption>
          	</figure>
          	
          </div>
			
          <div style="width:33%;transform: rotate(-11deg);float:left;text-align:center;width:300px;box-shadow: 1px 1px 12px #555;background-color:white;">
          	<figure>
          		<img src="test/image06.jpg" style="width: 270px;box-shadow: none;">
          		<br />
          		<caption>Les poilus</caption>
          	</figure>
          	
          </div>
          
          <div style="clear:both"></div>
                   
	 
          
                    <div style="width:33%;transform: rotate(8deg);float:left;text-align:center;width:300px;box-shadow: 1px 1px 12px #555;background-color:white;">
          	<figure>
          		<img src="test/image03.jpg" style="width: 270px;box-shadow: none;">
          		<br />
          		<caption>Les hôpitaux</caption>
          	</figure>
          	
          </div>   
          
          <div style="width:33%;transform: rotate(-11deg);float:left;text-align:center;width:300px;box-shadow: 1px 1px 12px #555;background-color:white;">
          	<figure>
          		<img src="test/image05.jpg" style="width: 270px;box-shadow: none;">
          		<br />
          		<caption>Les tombes de poilus</caption>
          	</figure>
          	
          </div>
          
          <div style="width:33%;transform: rotate(7deg);float:left;text-align:center;width:300px;box-shadow: 1px 1px 12px #555;background-color:white;">
          	<figure>
          		<img src="test/image04.jpg" style="width: 270px;box-shadow: none;">
          		<br />
          		<caption>Les camps et les prisonniers</caption>
          	</figure>
          	
          </div>	
          
         <div style="clear:both"></div>

        </article>

    </section>

    <footer><?php include('include/footer.inc'); ?></footer>

    <?php include('include/stats.inc'); ?>

    <!-- javascript -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    </body>
</html>