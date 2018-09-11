<!doctype html>
<html lang="fr">
<head>

<meta charset="utf-8">
          
<title>Présentation des cookies - Histoires de Poilus</title>

<meta name="description" content="Cette page explique le fonctionnement et l'utilité des cookies présent sur le site">

<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="/images/favicon.png" />
            
</head>

<body>

<!-- code js pour l'avertissement sur les cookies -->

<script src="js/cookiechoices.js"></script>
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
    
	<a href="index.php" title="retour sur la page d'accueil du site">
    <img src="images/logo.png" class="logo" alt="Histoires de Poilus"/></a>

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

<h1>Les cookies</h1>

    <h2>Qu'est-ce qu'un cookie ?</h2>

    <p>Le cookie est l'équivalent d'un petit fichier texte stocké sur l'ordinateur de l'internaute. Existants depuis plus de 20 ans, ils permettent aux développeurs de sites internet de conserver des données utilisateur afin de faciliter leur navigation et de permettre certaines fonctionnalités. Les cookies ont toujours été plus ou moins controversés car contenant des informations personnelles résiduelles pouvant potentiellement être exploitées par des tiers.</p>

    <p></p>

    <h2>Sont-ils dangereux ?</h2>

    <p>Étant de simples fichiers de texte, les cookies ne sont pas exécutables. <strong>Ils ne sont ni des logiciels espions ni des virus</strong>, bien que des cookies provenant de certains sites soient détectés par plusieurs logiciels antivirus parce qu'ils permettent aux utilisateurs d'être suivis quand ils ont visité plusieurs sites. La plupart des navigateurs récents permettent aux utilisateurs de décider s'ils acceptent ou rejettent les cookies. Les utilisateurs peuvent aussi choisir la durée de stockage des cookies. Toutefois, <strong>le rejet complet des cookies rend certains sites inutilisables</strong>. Par exemple, les paniers d'achat de magasins ou les sites qui exigent une connexion à l'aide d'identifiants (utilisateur et mot de passe).</p>
    
    <p></p>
    
    <p>Pour plus d'informations, je vous invite à vous rendre sur le site de la CNIL, <a href="http://www.cnil.fr/vos-droits/vos-traces/les-cookies/">rubrique Cookies</a>. L'organisme a également mis en ligne une petite vidéo explicative que je vous propose ci-dessous.</p>

    <iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x16lt53" allowfullscreen></iframe>
 
    <div class="video">
        <video controls>
            <source src="http://www.dailymotion.com/embed/video/x16lt53" type="video/dailymotion"> <!-- largeur 480px  -->
            Votre navigateur ne prend pas en charge cette vidéo.
        </video>
    </div> 
  
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