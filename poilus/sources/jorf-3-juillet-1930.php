<!doctype html>
<html lang="fr">
<head>

<meta charset="utf-8">
          
<title>Histoires de Poilus - Attribution des cartes d'ancien combattant</title>

<meta content="extrait du journal officiel de la République Française indiquant les conditions d'attribution des cartes d'ancien combattant suite à la Première Guerre Mondiale (1914-1918)" name="description">

<link rel="stylesheet" href="../../css/style.css">

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
                 
</head>

<body>

<!-- code js pour l'avertissement sur les cookies -->

<script src="../../js/cookiechoices.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsentBar('En naviguant sur le site, vous acceptez l’utilisation de cookies pour vous proposer une navigation optimale et me permettre de réaliser des statistiques de visites.',
      'Ok', 'En savoir plus', 'cookies.php');
  });
</script>

<header>
	
    <div id="rezo">
      <a href="https://www.facebook.com/genealexis.fr" title="voir la page Facebook du site"><img src="../../images/facebook.png"    alt="logo facebook"   /> </a> 
	  <img src="../../images/googleplus.png"    alt="logo Google Plus"   /><a href="https://twitter.com/alexisamand?lang=fr" title="me suivre sur Twitter"><img src="../../images/twitter.png"    alt="logo Twitter"   /></a>
    </div>
    
	<a href="../../index.php" title="Retour sur la page d'accueil du site">
  <img src="../../images/logo.png" class="logo" alt="retour sur la page d'accueil du site"/></a>

</header>
   
<nav>

	<a href="../../contact.php">Contact</a>
    <a href="../../webographie.php">la webographie</a>
    <a href="../../lieux.php">Les Batailles</a>
    <a href="../../releves.php">Les Relevés</a>
    <a href="../../poilus.php">Les Poilus</a>
	<a href="../../index.php">Accueil</a>
       
</nav>

<section style="background-color:#FFFFFF;">

	<article>

<h2>Attribution des cartes d'ancien combattant</h2>

<p>
Extrait du Journal Officiel de la République Française n°156 du 3 juillet 1930.<br />
Article n°2 du décret concerant les conditions d'attribution de la carte d'ancien combattant.<br />
(source: Gallica / Bibliothèque nationale de France)
</p>

<p style="text-align:center;">
<img src="decret-1-juillet-1930-article-2-01.jpg" width="550px" alt="Article n°2 du décret concerant les conditions d'attribution de la carte d'ancien combattant."/>
</p>

<p style="text-align:center;">
<img src="decret-1-juillet-1930-article-2-02.jpg" width="550px" alt="Article n°2 du décret concerant les conditions d'attribution de la carte d'ancien combattant."/>
</p>

<p style="text-align:center;margin-top:130px;font-size: 12px;">
<?php
setlocale(LC_ALL,'french'); 
echo "Dernière modification effectuée le ".date("j/m/Y", getlastmod());
?> 
</p>

</article>

</section>

<footer>
	<a href="../../mentions.php">Mentions Légales</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="../../contact.php">Contact</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="http://www.genealexis.fr">Généalexis</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="../../cookies.php">Cookies</a>
    <br /><br />Copyright &copy; 2014-<?php echo date('Y'); ?> - Alexis AMAND<br />Tous droits réservés
</footer>

<?php include('../../include/stats.inc'); ?> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<script type="text/javascript" src="../../js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="../../js/diapo.js"></script>

<!-- javascript -->

<script type="text/javascript">  
  $(document).ready(function() {
	$("a#single_image").fancybox();
  }); 

$(document).ready(function() {
    $(".diaporama").diaporama(
		  {
	    animationSpeed: "slow",
      delay:2
    	});
 	});
</script>  

</body>
</html>