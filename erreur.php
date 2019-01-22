<!doctype html>
<html lang="fr">
<head>

<meta charset="utf-8">
          
<title>Page non trouvée - Histoires de Poilus</title>

<meta name="description" content="la page que vous cherchez n'existe plus sur le site Histoires de Poilus.">
<meta name="google-site-verification" content="NrJvg2SL3r8GToGISpF-SJatGnKIvS5mekxb-2uTef4" />

<link rel="stylesheet" href="/css/style.css">    
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="/images/favicon.png" />
                   
</head>

<body>

<!-- code js pour l'avertissement sur les cookies -->

<script src="/js/cookiechoices.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsentBar('En naviguant sur le site, vous acceptez l’utilisation de cookies pour vous proposer une navigation optimale et me permettre de réaliser des statistiques de visites.',
      'Ok', 'En savoir plus', 'cookies.php');
  });
</script>

<header>
	
    <div id="rezo">
    <a href="https://www.facebook.com/genealexis.fr" title="voir la page Facebook du site">
    <img src="images/facebook.png" />
    </a>
    <img src="images/googleplus.png" />
    <a href="https://twitter.com/alexisamand?lang=fr" title="me suivre sur Twitter">
    <img src="images/twitter.png" />
    </a>
    </div>
      
<a href="/index.php" title="retour sur la page d'accueil du site">
<img src="/images/logo.png" class="logo" alt="Logo du site Histoires de Poilus"/></a>

</header>
   
<nav>
  <a href="contact.php">Contact</a>
  <a href="webographie.php">Webographie</a>
  <a href="lieux.php">Les Batailles</a>
  <a href="camps.php">Les Camps</a>
  <a href="releves.php">Les Relevés</a>
  <a href="hopitaux/hopitaux.php">Les Hôpitaux</a>
  <a href="poilus.php">Les Poilus</a>     
</nav>

<section>

	<article style="margin-left:0px;">

    <h1>Erreur 404</h1>
   
    <p>Oups ! La page que vous demandez n'a pas été trouvée !<br />Peut-être a t-elle été déplacée ou supprimée ?</p>

    <figure><img src="/images/periscope.jpg" alt=""/></figure>
    
    <p class="sources">
    <?php setlocale(LC_ALL,'french');echo "Dernière modification effectuée le ".date("j/m/Y", getlastmod()); ?> 
    </p>

  </article>

</section>

<footer>
	<a href="/mentions.php">Mentions Légales</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="/contact.php">Contact</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="http://www.genealexis.fr">Généalexis</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="/cookies.php">Cookies</a>
    <br /><br />Copyright &copy; 2014-<?php echo date('Y'); ?> - Alexis AMAND<br />Tous droits réservés
</footer>

<?php include('include/stats.inc'); ?>

<!-- javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
<script type="text/javascript" src="/js/jquery.fancybox.min.js"></script>

<script type="text/javascript">  
  $(document).ready(function() {
	$("a#single_image").fancybox();
  }); 
</script>  

</body>
</html>