<?php  
    define( 'MAIL_TO', /* >>>>> */'alexis.amand@gmail.com'/* <<<<< */ );  //ajouter votre courriel  
    define( 'MAIL_FROM', 'utilisateur@domaine.tld' ); // valeur par défaut  
    define( 'MAIL_OBJECT', 'objet du message' ); // valeur par défaut  
    define( 'MAIL_MESSAGE', 'votre message' ); // valeur par défaut  

    $mailSent = false; // drapeau qui aiguille l'affichage du formulaire OU du récapitulatif  
    $errors = array(); // tableau des erreurs de saisie  
      
    if( filter_has_var( INPUT_POST, 'send' ) ) // le formulaire a été soumis avec le bouton [Envoyer]  
    {  
        $from = filter_input( INPUT_POST, 'from', FILTER_VALIDATE_EMAIL );  
        if( $from === NULL || $from === MAIL_FROM ) // si le courriel fourni est vide OU égale à la valeur par défaut  
        {  
            $errors[] = 'Vous devez renseigner votre adresse de courrier électronique.';  
        }  
        elseif( $from === false ) // si le courriel fourni n'est pas valide  
        {  
            $errors[] = 'L\'adresse de courrier électronique n\'est pas valide.';  
            $from = filter_input( INPUT_POST, 'from', FILTER_SANITIZE_EMAIL );  
        }  

        $object = filter_input( INPUT_POST, 'object', FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_LOW );  
        if( $object === NULL OR $object === false OR empty( $object ) OR $object === MAIL_OBJECT ) // si l'objet fourni est vide, invalide ou égale à la valeur par défaut  
        {  
            $errors[] = 'Vous devez renseigner l\'objet.';  
        }  

 /* pas besoin de nettoyer le message.   
 / http://www.phpsecure.info/v2/article/MailHeadersInject.php  
 / Logiquement, les parties message, To: et Subject: pourraient servir aussi à injecter quelque chose,  mais la fonction mail()  
 / filtre bien les deux dernières, et la première est le message, et à partir du moment où on a sauté une ligne dans l'envoi du mail,  
 / c'est considéré comme du texte; le message ne saurait donc rester qu'un message.*/  
        $message = filter_input( INPUT_POST, 'message', FILTER_UNSAFE_RAW );  
        if( $message === NULL OR $message === false OR empty( $message ) OR $message === MAIL_MESSAGE ) // si le message fourni est vide ou égale à la valeur par défaut  
        {  
            $errors[] = 'Vous devez écrire un message.';  
        }  

        if( count( $errors ) === 0 ) // si il n'y a pas d'erreurs  
        {  
            if( mail( MAIL_TO, $object, $message, "From: $from\nReply-to: $from\n" ) ) // tentative d'envoi du message  
            {  
                $mailSent = true;  
            }  
            else // échec de l'envoi  
            {  
                $errors[] = 'Votre message n\'a pas été envoyé.';  
            }  
        }  
    }  
    else // le formulaire est affiché pour la première fois, avec les valeurs par défaut  
    {  
        $from = MAIL_FROM;  
        $object = MAIL_OBJECT;  
        $message = MAIL_MESSAGE;  
    }  
?>  

<!doctype html>
<html>
<head>

<meta charset="utf-8">
          
<title>Contacter le webmaster - Histoires de Poilus</title>

<meta content="formulaire pour envoyer un message au webmaster du site" name="description">

<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="/images/favicon.png" />
   
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>  
   
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>

    

<script type="text/javascript">  
  $(document).ready(function() {

	
	
	$("a#single_image").fancybox();
	
	
	
}); 
</script>  
            
      
</head>

   


<body>

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
    <a href="contact.php" class="NavSelected">Contact</a>
    <a href="webographie.php">Webographie</a>
    <a href="lieux.php">Les Batailles</a>
    <a href="camps.php">Les Camps</a>
    <a href="releves.php">Les Relevés</a>
    <a href="hopitaux/hopitaux.php">Les Hôpitaux</a>
    <a href="poilus.php">Les Poilus</a>     
</nav>

<section>

<article style="margin-left:0px;">

<h1>Pour me contacter</h1>
         
 
<?php  
    if( $mailSent === true ) // si le message a bien été envoyé, on affiche le récapitulatif  
    {  
?>  
        <p id="success">Votre message a bien été envoyé.</p>  
        <p><strong>Courriel pour la réponse :</strong><br /><?php echo( $from ); ?></p>  
        <p><strong>Objet :</strong><br /><?php echo( $object ); ?></p>  
        <p><strong>Message :</strong><br /><?php echo( nl2br( htmlspecialchars( $message ) ) ); ?></p>  
<?php  
    }  
    else // le formulaire est affiché pour la première fois ou le formulaire a été soumis mais contenait des erreurs  
    {  
        if( count( $errors ) !== 0 )  
        {  
            echo( "\t\t<ul>\n" );  
            foreach( $errors as $error )  
            {  
                echo( "\t\t\t<li>$error</li>\n" );  
            }  
            echo( "\t\t</ul>\n" );  
        }  
        else  
        {  
            echo( "\t\t<p id=\"welcome\"><em>Tous les champs sont obligatoires</em></p>\n" );  
        }  
?>  
        <form id='contact' method="post" action="<?php echo( $_SERVER['REQUEST_URI'] ); ?>">  
            <p>  
                <label for="from">Courriel pour la réponse</label><br /> 
                <input type="text" name="from" id="from" value="<?php echo( $from ); ?>" />  
            </p>  
            <p>  
                <label for="object">Objet</label><br /> 
                <input type="text" name="object" id="object" value="<?php echo( $object ); ?>" />  
            </p>   
            <p>  
                <label for="message">Message</label><br />  
                <textarea name="message" id="message" rows="20" cols="80"><?php echo( $message ); ?></textarea>  
            </p>  
            <p>  
                <input type="reset" name="reset" value="Effacer" />  
                <input type="submit" name="send" value="Envoyer" />  
            </p>  
        </form>  
<?php  
    }  
?>  

<p class="sources">
<?php
setlocale(LC_ALL,'french'); 
echo "Dernière modification effectuée le ".date("j/m/Y", getlastmod());
?> 
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
 
</body>
</html>