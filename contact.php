<?php
/* Si le formulaire est envoyé alors on fait les traitements */
if (isset($_POST['envoye']))
{
    /* Récupération des valeurs des champs du formulaire */
    if (get_magic_quotes_gpc())
    {
      $civilite		= stripslashes(trim($_POST['civilite']));
      $nom	     	= stripslashes(trim($_POST['nom']));
      $expediteur	= stripslashes(trim($_POST['email']));
      $sujet		= stripslashes(trim($_POST['sujet']));
      $message		= stripslashes(trim($_POST['message']));
    }
    else
    {
      $civilite		= trim($_POST['civilite']);
      $nom		    = trim($_POST['nom']);
      $expediteur	= trim($_POST['email']);
      $sujet		= trim($_POST['sujet']);
      $message		= trim($_POST['message']);
    }
 
    /* Expression régulière permettant de vérifier si le 
    * format d'une adresse e-mail est correct */
    $regex_mail = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';
 
    /* Expression régulière permettant de vérifier qu'aucun 
    * en-tête n'est inséré dans nos champs */
    $regex_head = '/[\n\r]/';
 
    /* Si le formulaire n'est pas posté de notre site on renvoie 
    * vers la page d'accueil */
    if($_SERVER['HTTP_REFERER'] != 'http://histoiresdepoilus.genealexis.fr/contact2.php')
    {
      header('Location: http://histoiresdepoilus.genealexis.fr');
    }
    /* On vérifie que tous les champs sont remplis */
    elseif (empty($civilite) 
           || empty($nom) 
           || empty($expediteur) 
           || empty($sujet) 
           || empty($message))
    {
      $alert = 'Tous les champs doivent être renseignés';
    }
    /* On vérifie que le format de l'e-mail est correct */
    elseif (!preg_match($regex_mail, $expediteur))
    {
      $alert = 'L\'adresse '.$expediteur.' n\'est pas valide';
    }
    /* On vérifie qu'il n'y a aucun header dans les champs */
    elseif (preg_match($regex_head, $expediteur) 
            || preg_match($regex_head, $nom) 
            || preg_match($regex_head, $sujet))
    {
        $alert = 'En-têtes interdites dans les champs du formulaire';
    }
    /* Si aucun problème et aucun cookie créé, on construit le message et on envoie l'e-mail */
    elseif (!isset($_COOKIE['sent']))
    {
        /* Destinataire (votre adresse e-mail) */
        $to = 'alexis.amand@gmail.com';
 
        /* Construction du message */
        $msg  = 'Bonjour,'."\r\n\r\n";
        $msg .= 'Ce mail a été envoyé depuis Histoires de Poilus par '.$civilite.' '.$nom."\r\n\r\n";
        $msg .= 'Voici le message qui vous est adressé :'."\r\n";
        $msg .= '***************************'."\r\n";
        $msg .= $message."\r\n";
        $msg .= '***************************'."\r\n";
 
        /* En-têtes de l'e-mail */

        $headers = 'MIME-Version: 1.0'."\n";
		$headers .= 'Content-type: text/html; charset=utf-8'."\n";				
		$headers .='From: '.$nom.' <'.$expediteur.'>'."\r\n\r\n";
 
        /* Envoi de l'e-mail */
        if (mail($to, $sujet, $msg, $headers))
        {
            $alert = 'E-mail envoyé avec succès';
 
            /* On créé un cookie de courte durée (ici 120 secondes) pour éviter de 
            * renvoyer un mail en rafraichissant la page */
            setcookie("sent", "1", time() + 120);
 
            /* On détruit la variable $_POST */
            unset($_POST);
        }
        else
        {
            $alert = 'Erreur d\'envoi de l\'e-mail';
        }
 
    }
    /* Cas où le cookie est créé et que la page est rafraichie, on détruit la variable $_POST */
    else
    {
        unset($_POST);
    }
}
?>

<!doctype html>
<html lang="fr">

<head>

        <meta charset="utf-8">

        <title>Contacter le webmaster - Histoires de Poilus</title>
        <meta content="formulaire pour envoyer un message au webmaster du site" name="description">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/resp.css">
        <link rel="stylesheet" href="css/fontawesome/css/all.min.css">  

        <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/png" href="images/favicon.png" />

        <style>

        .btn
            {
            background-color: #5b5b5b;
            width: 100px;
            padding: 8px;
            text-align: center;
            margin-left: 3px;
            color: #e2ede4;
            text-decoration: none;
            }

        </style>

    </head>
<body>

<body>

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
        <a href="contact.php" class="NavSelected">Contact</a>
        <a href="webographie.php">Les Ressources</a>
        <a href="lieux.php">Les Batailles</a>
        <a href="camps.php">Les Camps</a>
        <a href="tombes.php">Les Tombes</a>
        <a href="hopitaux/hopitaux.php">Les Hôpitaux</a>
        <a href="poilus.php">Les Poilus</a>
    </nav>

    <section>

        <article style="margin-left:0px;">

        <h1>Pour me contacter</h1>

        <p>
        Vous pouvez me contacter via les réseaux sociaux :
        </p>

        <p>
        Facebook : <a href="https://www.facebook.com/genealexis.fr">https://www.facebook.com/genealexis.fr</a><br />
        Twitter : <a href="https://twitter.com/alexisamand">https://twitter.com/alexisamand</a>
        </p>

        <p>
        Par mail : <a href="mailto:alexis.amand@gmail.fr">alexis.amand@gmail.fr</a>
        </p>

        <p>
        Ou encore en utilisant ce formulaire :
        </p>

        <?php
        if (!empty($alert))
        {
            echo '<p style="color:red">'.$alert.'</p>';
        }
        ?>
        
        <form action="contact2.php" method="post">
            <p>
                <label for="civilite">Civilité :</label>
                <select id="civilite" name="civilite">
                    <option 
                        value="mr"
                        <?php 
                            if (!isset($_POST['civilite']) || $_POST['civilite'] == 'mr')
                            {
                                echo ' selected="selected"';
                            }
                        ?>
                    >
                        Monsieur
                    </option>
                    <option 
                        value="mme"
                        <?php 
                            if (isset($_POST['civilite']) && $_POST['civilite'] == 'mme')
                            {
                                echo ' selected="selected"';
                            }
                        ?>
                    >
                        Madame
                    </option>
                    <option 
                        value="mlle"
                        <?php 
                            if (isset($_POST['civilite']) && $_POST['civilite'] == 'mlle')
                            {
                                echo ' selected="selected"';
                            }
                        ?>
                    >
                        Mademoiselle
                    </option>
                </select>
            </p>
            <p>
                <label for="nom">Nom/Prénom :</label>
                <input type="text" id="nom" name="nom" value="<?php echo (isset($_POST['nom'])) ? $nom : '' ?>" style="width:242px;"/>
            </p>
            <p>
                <label for="email">E-mail :</label>
                <input type="text" id="email" name="email" value="<?php echo (isset($_POST['email'])) ? $expediteur : '' ?>"  style="width:287px;"/>
            </p>
            <p>
                <label for="sujet">Sujet :</label>
                <input type="text" id="sujet" name="sujet" value="<?php echo (isset($_POST['sujet'])) ? $sujet : '' ?>"  style="width:294px;"/>
            </p>
            <p>
                <label for="message">Message :</label><br/>
                <textarea id="message" name="message" cols="47" rows="10">
                    <?php echo (isset($_POST['message'])) ? $message : '' ?>
                </textarea>
            </p>
            <p>
                <input type="reset" name="reset" value="Effacer" class="btn"/>  
                <input type="submit" name="envoye" value="Envoyer" class="btn"/>
            </p>
        </form>
 
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