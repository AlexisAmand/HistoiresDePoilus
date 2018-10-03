<!doctype html>
<html lang="fr">
<head>

<meta charset="utf-8">
          
<title>Mentions légales - Histoires de Poilus</title>
<meta content="mentions légales du site 'Histoires de poilus'. Coordonnées de l'éditeur et de hébergeur du site." name="description">

<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="/images/favicon.png" />
       
</head>

<body>

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
      
<a href="index.php" title="retour sur la page d'accueil du site">
<img src="images/logo.png" class="logo" alt="Histoires de Poilus"/></a>

</header>

<nav>

	<a href="contact.php">Contact</a>
    <a href="webographie.php">Webographie</a>
    <a href="lieux.php">Les Batailles</a>
    <a href="camps.php">Les Camps</a>
    <a href="releves.php">Les Relevés</a>
    <a href="poilus.php">Les Poilus</a>
	<a href="index.php">Accueil</a>
       
</nav>

<section>

<article style="margin-left:0px;">

<h1>Mentions Légales</h1>

<h2>Editeur du site</h2>

<p><a href="http://boitasite.com/">Alexis AMAND</a><br/>Saint-Saulve (Nord)<br/>SIRET: 517 501 235 000 17<br/></p>

<br/><h2>Hébergeur du site</h2>

<p><a href="http://www.amen.fr/">AMEN SASU</a><br/>12-14, Rond Point des Champs Elysées 75008 Paris.<br/>RCS : 421 527 797 000 11<br/></p>

<br /><h2>Informations complémentaires</h2>

<ul>
	<li>Conformément à la loi n° 78-17 du 6 janvier 1978, relative à l'Informatique, aux Fichiers et aux Libertés, vous disposez d'un droit d'accès et de rectification des données à caractère personnel vous concernant et faisant l’objet de traitements.</li>
    <li>En vue d’adapter le site aux demandes de ses visiteurs, je mesure le nombre de visites, le nombre de pages vues ainsi que de l'activité des visiteurs sur le site et leur fréquence de retour avec l'outil <a href="https://matomo.org" title="aller sur le site de Matomo">Matomo (ex Piwik)</a>.</li>
    <li><a href="https://matomo.org" title="aller sur le site de Matomo">Matomo (ex Piwik)</a>, l'outil de statistiques utilisé par le site "Histoires de Poilus", génère un cookie avec un identifiant unique, dont la durée de conservation est limitée à 13 mois. Je collecte également votre adresse IP, afin de déterminer la ville depuis laquelle vous vous connectez. Celle-ci est immédiatement anonymisée après utilisation. "Histoires de Poilus" ne peut donc en aucun cas remonter par ce biais à une personne physique.</li>
</ul>

<p class="sources">
<?php setlocale(LC_ALL,'french');echo "Dernière modification effectuée le ".date("j/m/Y", getlastmod()); ?> 
</p>

</article>

</section>

<footer>
	<a href="mentions.php">Mentions Légales</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="contact.php">Contact</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="http://www.genealexis.fr">Généalexis</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="cookies.php">Cookies</a>
    <br /><br />Copyright &copy; 2014-<?php echo date('Y'); ?> - Alexis AMAND<br />Tous droits réservés
</footer>

<?php include('include/stats.inc'); ?>

<!-- javascript -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>    
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>

<script type="text/javascript">  
  $(document).ready(function() {
	$("a#single_image").fancybox();
  }); 
</script>  

</body>
</html>

