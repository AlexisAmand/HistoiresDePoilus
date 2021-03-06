<?php 

$total = 0;

function CompterLi($str)
    {

    $dom = new DOMDocument;
    $dom->loadHTML($str);

    foreach($dom->getElementsByTagName('ul') as $ul) 
        {
        $count = $ul->getElementsByTagName('li')->length;
        }

    $GLOBALS['total'] = $GLOBALS['total'] + $count;
    echo $str;

    }

?>

<!doctype html>
<html lang="fr">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Les soldats de la Grande Guerre - Histoires de Poilus</title>
    <meta content="Liste alphabétique soldats des mentionnés sur le site Histoire de Poilus" name="description">

    <link rel="stylesheet" href="css/style.dev.css" media="all">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="images/favicon.png"/>

    <!-- code pour les cookies -->

    <script type="text/javascript" src="/tarteaucitron/tarteaucitron.js"></script>

    <script type="text/javascript">
    tarteaucitron.init({
	  "privacyUrl": "", /* Privacy policy url */

	  "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
	  "cookieName": "tarteaucitron", /* Cookie name */

	  "orientation": "middle", /* Banner position (top - bottom) */

	  "showAlertSmall": false, /* Show the small banner on bottom right */
	  "cookieslist": false, /* Show the cookie list */

      "showIcon": true, /* Show cookie icon to manage cookies */
      "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */

	  "adblocker": false, /* Show a Warning if an adblocker is detected */

      "DenyAllCta" : true, /* Show the deny all button */
      "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
      "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */

	  "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

	  "removeCredit": false, /* Remove credit link */
	  "moreInfoLink": true, /* Show more info link */

      "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
      "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */

	  //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */

      "readmoreLink": "", /* Change the default readmore link */

      "mandatory": true, /* Show a message about mandatory cookies */
    });
    </script>

</head>

<body>

<!-- header du site  (menu + logo) -->

  <div class="container-fluid">

            <?php include $_SERVER['DOCUMENT_ROOT'].'./include/header2.inc'; ?>

  </div>

<!-- contenu de la page -->

<div class="container">

    <section class="row">

        <article class="col-12">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index.php" title="Retour sur la page d'accueil">Accueil</a></li>
                <li class="breadcrumb-item"><a href="poilus.php" title="Accueil de la rubrique sur les soldats de la Grande Guerre">Les poilus</a></li>
                <li class="breadcrumb-item active" aria-current="page">Index des noms cités</li>
            </ol>
        </nav>

        <h1 class="my-4">Index des noms de soldats cités</h1>
    
        <p class="text-justify">Vous trouverez sur cette page la liste <span id="NombrePoilus">de tous les</span> soldats mentionnés sur le site. Il peut s'agir d'une biographie détaillée, d'un document ou même d'une mention sur une tombe. Les individus sont classés par pays, puis par ordre alphabétique sur le nom de famille. Pour faciliter la recherche, cette liste contient aussi des civils ayant le status de morts pour la France. Je vous souhaite de bonnes recherches !</p>

        <div class="edito2col">

            <h2>Allemagne</h2>
           
            <?php

            $ListePoilusAllemagne='
            <ul>
                <li><a href="camps/camp-friedrichsfeld.php#Major_Bach">BACH (Major au camp de Friedrichsfeld)</a></li>
                <li><a href="camps/camp-munster.php#Freither_Von_Bissing">VON BISSING Moritz</a></li>
                <li><a href="poilus/FIEVET-Auguste-Victor.php#VonEmmich-Sordet">VON EMMICH Otto</a></li>
                <li><a href="poilus/MICHEL-Firmin.php#Max-Von-Hausen">VON HAUSEN Max</a></li>
            </ul>
            ';

            CompterLi($ListePoilusAllemagne);

            ?>

            <br />

            <h2>Angleterre</h2>

            <?php

            $ListePoilusAngleterre='
            <ul>
                <li><a href="tombes/awoingt.php">AMIS T.S.</a></li>
                <li><a href="tombes/awoingt.php">CAIN G.H.</a></li>
                <li><a href="tombes/awoingt.php">GREEN H.A</a></li>
                <li><a href="tombes/awoingt.php">GRIX C.H.</a></li>
                <li><a href="tombes/awoingt.php">HODGE E.S.</a></li>
                <li><a href="camps/camp-ruhleben.php#Kamps">KAMPS (prénom inconnu)</a></li>
                <li><a href="tombes/awoingt.php">LEVESON-GOWER W.G.G.</a></li>
                <li><a href="tombes/awoingt.php">MARSHALL I.</a></li>
            </ul>
            ';

            CompterLi($ListePoilusAngleterre);

            ?>

            <br />

            <h2>Australie</h2>

            <?php

            $ListePoilusAustralie='
            <ul>
                <li><a href="camps/camp-hammelburg.php#John-Macpherson">MACPHERSON John</a></li>
            </ul>
            ';

            CompterLi($ListePoilusAustralie);

            ?>

            <br />

            <h2>Belgique</h2>
            
            <?php
            $ListePoilusBelgique='
            <ul>
                <li><a href="poilus/amand-jules.php">AMAND Jules</a></li>
                <li><a href="poilus/amand-octave.php">AMAND Octave</a></li>
                <li><a href="poilus/quintin-raoul.php">QUINTIN Raoul</a></li>
            </ul>
            ';

            CompterLi($ListePoilusBelgique);

            ?>

            <br />

            <h2>France</h2>

            <strong>Ardennes</strong>

            <?php
            $ListePoilusArdennes='
            <ul>
                <li><a href="poilus/baltazart-auguste-maurice.php">BALTAZART Auguste Maurice</a></li>
                <li><a href="poilus/lacourt-onesime.php">LACOURT Onésime Marcel</a></li>
            </ul>
            ';

            CompterLi($ListePoilusArdennes);

            ?>

            <br />

            <strong>Côte-d'Or</strong>

            <?php
            $ListePoilusCotedor='
            <ul>
                <li><a href="poilus/FROIDUROT-Alfred.php">FROIDUROT Alfred</a></li>
                <li><a href="poilus/froidurot-alphonse.php">FROIDUROT Alphonse</a></li>
                <li><a href="poilus/froidurot-marcel.php">FROIDUROT Marcel</a></li>
            </ul>
            ';

            CompterLi($ListePoilusCotedor);

            ?>

            <br />

            <strong>Marne</strong>

            <?php
            $ListePoilusMarne='
            <ul>
                <li><a href="poilus/arnould-gaston.php">ARNOULD Gaston</a></li>
                <li><a href="poilus/arnould-henri-rene.php">ARNOULD Henri René</a></li>
                <li><a href="poilus/astiers-jules-alphonse.php">ASTIER(S) Jules Alphonse</a></li>
                <li><a href="poilus/BALTAZART-Ernest-Auguste.php">BALTAZART Ernest Auguste</a></li>
                <li><a href="poilus/caron-eugene-alexandre.php">CARON Eugène Alexandre</a></li>
                <li><a href="poilus/MAILLART-Alexandre.php">MAILLART Alexandre Ernest</a></li>
                <li><a href="poilus/MICHEL-Firmin.php">MICHEL Firmin</a></li>
                <li><a href="poilus/paquet-leopold.php">PAQUET Léopold</a></li>
            </ul>
            ';

            CompterLi($ListePoilusMarne);

            ?>

            <br />

            <strong>Nord</strong>

            <?php

            $ListePoilusNord='
            <ul>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">ADAM Eugène</a></li>
                <li><a href="poilus/amand-hoche.php">AMAND Hoche</a></li>
                <li><a href="poilus/amand-marceau.php">AMAND Marceau</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">ANCEL Hippolyte</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">ARMAND Charles</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BAERT Alphonse</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BASSET Albert</a></li>
                <li><a href="tombes/capelle.php#Leon-Basuyau">BASUYAU Léon Paul</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BAVAY Eugène</a></li>
                <li><a href="tombes/valenciennes.php#Andre_Bernard">BERNARD André</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BISIAU Henri</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BISIAU Michel</a></li>
                <li><a href="tombes/valenciennes.php#Lucien_Boddaert">BODDAERT Lucien</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BOISSART André</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BOISSART René</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BONEILL René</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BONENFANT Paul</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BOQUET Hippolyte</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BOQUET Rémi</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BOTIAUX Alphonse</a></li>
                <li><a href="poilus/bottiau-raphael-joseph.php">BOTTIAU Raphaël Joseph</a></li>
                <li><a href="poilus/boucher-gervais.php">BOUCHER Gervais</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BOURDON Paul</a></li>
                <li><a href="poilus/boursier-edouard.php">BOURSIER Edouard</a></li>
                <li><a href="poilus/BOURSIER-Jules.php">BOURSIER Jules Henri</a></li>
                <li><a href="tombes/valenciennes.php#Paul-Brux">BRUX Paul</li></a>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BUISINE Maurice</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BUSIGNY Elie</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">BUZIN Robert</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">CACHEUX Maurice</a></li>
                <li><a href="poilus/carin-alfred.php">CARIN Alfred</a></li>
                <li><a href="poilus/CARIN-Edouard.php">CARIN Édouard</a></li>
                <li><a href="poilus/carin-jean-baptiste.php">CARIN Jean Baptiste</a></li>
                <li><a href="poilus/carin-joseph.php">CARIN Joseph</a></li>
                <li><a href="poilus/CARIN-Leon.php">CARIN Léon</a></li>
                <li><a href="poilus/CARIN-Theophile.php">CARIN Théophile</a></li>
                <li><a href="poilus/CARLIER-Druon-Joseph.php">CARLIER Druon Joseph</a></li>
                <li><a href="poilus/CARLIER-Louis-Abraham.php">CARLIER Louis Abraham</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">CASTIAN Georges</a></li>
                <li><a href="tombes/capelle.php#Joseph-Vanesse">CHASTIN Aimé (victime civile)</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">CHOQUET Alexandre</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">CORDIER Victor</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">COULON François</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">COUPE Emile</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">COURTIER Jean</a></li>
                <li><a href="tombes/saint-saulve.php#Jules-Covin">COVIN Jules</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">CRETEUR Henri</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DANJOU Henri</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DAUBRESSE Augustin</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DEBRABANT Georges</a></li>
                <li><a href="tombes/capelle.php#Joseph-Vanesse">DECAUDIN Louis (victime civile)</a></li>
                <li><a href="tombes/capelle.php#Edouard-Decoster">DECOSTER Edouard Gaston</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DEFAUX Louis</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DEFRESNES Marius</a></li>
                <li><a href="poilus/FIEVET-Auguste-Victor.php#De-Gaulle">DE GAULLE Charles</a></li>              
                <li><a href="poilus/delaux-oscar-julien.php">DELAUX Oscar Julien</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DELBECQUE Ernest</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DELGRANGE Charles</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DELGRANGE René</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DELGRANGE Théophile</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DEMURIEZ Arthur</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DESMOUTIER Henri</a></li>
                <li><a href="poilus/DUBOIS-Emile-Edmond.php">DUBOIS Émile Edmond</a></li>
                <li><a href="poilus/dubois-jean-charles.php">DUBOIS Jean Charles</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DUNCK Gustave</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DUPAS Jacques</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DUPAS René</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DUPONT Arthur Désiré</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DUPONT Arthur Emile</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DUPONT Jules</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">DUVANT Edmond</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">EVRARD François</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">EVRARD Léon</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">FAYOLA Gaston</a></li>
                <li><a href="poilus/FIEVET-Auguste-Victor.php">FIEVET Auguste Victor</a></li>
                <li><a href="poilus/FIEVET-Charles-Augustin.php">FIEVET Charles Augustin</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">FLAMME Jules</a></li>
                <li><a href="poilus/FONTAINE-Henri-Gustave.php">FONTAINE Henri Gustave</a></li>
                <li><a href="poilus/CARLIER-Druon-Joseph.php#Fournier">FOURNIER Joseph Anthelme</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">FROMONT Arthur</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">GABELLE Emile</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">GELEZ Alfred</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">GELEZ Georges</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">GENOUX Adolphe</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">GERVOIS Auguste</a></li>
                <li><a href="tombes/valenciennes.php#Gouvion">GOUVION Maurice</a></li>
                <li><a href="tombes/valenciennes.php#Gouvion">GOUVION René</a></li>
                <li><a href="poilus/GRAIN-Leon-Albert.php">GRAIN Léon Albert</a></li>
                <li><a href="poilus/GRAIN-Louis.php">GRAIN Louis</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">GREF César</a></li>
                <li><a href="poilus/hanze-augustin.php">HANZE Augustin</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">HIANCE Pierre</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">HINCK Albert</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">HOLLANDE Georges</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">HOLLANDE Robert</a></li>
                <li><a href="poilus/JOLY-Noel-Jules.php">JOLY Noël Jules</a></li>
                <li><a href="tombes/valenciennes.php#paul-joseph-jourdan">JOURDAN Paul Joseph</a></li>
                <li><a href="poilus/lamandin-georges.php">LAMANDIN Georges</a></li>
                <li><a href="tombes/valenciennes.php#daniel-lamendin">LAMENDIN Daniel</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">LANDAS Louis</a></li>
                <li><a href="tombes/capelle.php#Joseph-Vanesse">LECAIL Adèle (victime civile)</a></li>
                <li><a href="tombes/saint-saulve.php#Xavier-Lecerf">LECERF Xavier</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">LECHEVIN Roméo</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">LEFEBRE Emile</a></li>
                <li><a href="tombes/saint-saulve.php#Alfred-Lefebvre">LEFEBVRE Alfred</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">LELEU Paul</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">LERNOULD Paul</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">LEROUX Armand</a></li>
                <li><a href="poilus/lesage-jules-joseph.php">LESAGE Jules Joseph</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">LESNES Léon</a></li>
                <li><a href="poilus/LETIENNE-Florimond.php">LETIENNE Florimond</a></li>
                <li><a href="poilus/magny-jules.php">MAGNY Jules</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">MAGY Maurice</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">MAILLARD Désiré</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">MANGE Alfred</a></li>
                <li><a href="poilus/mascart-emile.php">MASCART Émile</a></li>
                <li><a href="poilus/mascart-leon.php">MASCART Léon</a></li>
                <li><a href="poilus/mascart-leon-2.php">MASCART Léon</a></li>
                <li><a href="poilus/mascart-louis.php">MASCART Louis</a></li>
                <li><a href="tombes/valenciennes.php#Lucien-Masclet">MASCLET Lucien</a></li>
                <li><a href="poilus/masquellier-jean-baptiste.php">MASQUELLIER Jean-Baptiste</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">MASSON Aimé</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">MILLIEZ François</a></li>
                <li><a href="tombes/valenciennes.php#Rene-Mirland">MIRLAND René</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">MOYAUX Pierre</a></li>
                <li><a href="tombes/capelle.php#Joseph-Vanesse">NOISETTE Hubert (victime civile)</a></li>
                <li><a href="tombes/valenciennes.php#Georges-Nollin">NOLLIN Georges</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">OLIVIER Alfred</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">PAINVIN Alfred</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">PAINVIN Gontran</a></li>
                <li><a href="poilus/patou-druon-adrien.php">PATOU Druon Adrien</a></li>
                <li><a href="poilus/pelez-alfred.php">PELEZ Alfred</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">PENNING Charles</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">PEPIN Emile</a></li>
                <li><a href="poilus/hanze-augustin.php#Louis-pergaud">PERGAUD Louis</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">PETIT Appolon</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">PHILIPPE Oscar</a></li>
                <li><a href="tombes/valenciennes.php#Etienne-Postille">POSTILLE Etienne</a></li>
                <li><a href="tombes/valenciennes.php#Jules-Reumont">REUMONT Jules</li></a>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">ROMBAUX Marc</a></li>
                <li><a href="poilus/rousseaux-eugene-fernand.php">ROUSSEAUX Eugène Fernand</a></li>
                <li><a href="poilus/ROUSSEAUX-Louis.php">ROUSSEAUX Louis Henri</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">SAINT PAUL Georges</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">SENECHAL Marcel</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">SPAR Auguste</a></li>
                <li><a href="poilus/tiburce-louis.php">TIBURCE Louis</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">TORREZ Augène</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">VANDROMME Gabriel</a></li>
                <li><a href="poilus/vanesse-alfred.php">VANESSE Alfred</a></li>
                <li><a href="tombes/capelle.php#Joseph-Vanesse">VANESSE Joseph</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">VANLEVEN Désiré</a></li>
                <li><a href="poilus/VELU-Adrien.php">VELU Adrien</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">VERMEILLE Henri</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">VERNUS Paul</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">VEUBELOT Arthur</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">VIGNAUD Léon</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">WALLEZ Désiré</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">WALLON Arthur</a></li>
                <li><a href="tombes/valenciennes-02.php#saint-nicolas">WATTIEZ Jules</a></li>
            </ul>
            ';

            CompterLi($ListePoilusNord);

            ?>

            <?php

            $ListePoilusNordInconnu='
            <ul>
                <li><a href="tombes/valenciennes.php#inconnu-01">Soldat inconnu n°1 (Valenciennes)</a></li>
            </ul>
            ';

            CompterLi($ListePoilusNordInconnu);

            ?>

            <?php

            $ListePoilusInconnus='
            <strong>Non localisés</strong>

            <ul>
                <li><a href="poilus/CARIN-Théophile.php#Ardit">ARDIT (prénom inconnu)</a></li>
                <li><a href="poilus/FIEVET-Auguste-Victor.php#Carton_Bataille">BATAILLE (prénom inconnu)</a></li>
                <li><a href="camps/camp-giessen.php#Jean_Bescond">BESCOND Jean</a></li>
                <li><a href="poilus/CARLIER-Louis-Abraham.php#Bocquet">BOCQUET (prénom inconnu)</a></li>
                <li><a href="poilus/FIEVET-Auguste-Victor.php#Carton_Bataille">CARTON (prénom inconnu)</a></li>
                <li><a href="poilus/CARLIER-Druon-Joseph.php#Crepy">CREPY (prénom inconnu)</a></li>
                <li><a href="camps/camp-friedrichsfeld.php#Etienne-Dadu">DADU Etienne</a></li>
                <li><a href="poilus/DUBOIS-Emile-Edmond.php#Duperrier_Selva">DUPERRIER (prénom inconnu)</a></li>
                <li><a href="poilus/CARIN-Théophile.php#Ardit">FLOUCAUT de FOURCROY (prénom inconnu)</a></li>
                <li><a href="camps/camp-heuberg.php#Gaudineau">GAUDINEAU (prénom inconnu)</a></li>
                <li><a href="poilus/VELU-Adrien.php#Guennebaud">GUENNEBAUD (prénom inconnu)</a></li>
                <li><a href="poilus/CARLIER-Druon-Joseph.php#Fournier">GUERANDEL (prénom inconnu)</a></li>
                <li><a href="camps/camp-darmstadt.php#Louis_Guinet">GUINET Louis</a></li>
                <li><a href="poilus/JOLY-Noel-Jules.php#Lafeuille">LAFEUILLE (prénom inconnu)</a></li>
                <li><a href="camps/camp-hammelburg.php#Charles_Lewine">LEWINE Charles</a></li>
                <li><a href="poilus/GRAIN-Leon-Albert.php#Littoye">LITTOYE (prénom inconnu)</a></li>
                <li><a href="tombes/capelle.php#Joseph-Vanesse">MALAQUIN Edmond (victime civile)</a></li>
                <li><a href="camps/camp-friedrichsfeld.php#Charles_Mangin">MANGIN Charles (Général)</a></li>
                <li><a href="camps/camp-friedrichsfeld.php#Henri-Marliere">MARLIERE Henri</a></li>
                <li><a href="camps/camp-limburg.php#Emilien_Ordonnaud">ORDONNAUD Emilien</a></li>
                <li><a href="camps/camps-munster.php#Charles_Petit">PETIT Charles</a></li>
                <li><a href="poilus/CARLIER-Louis-Abraham.php#Prevost">PREVOST (prénom inconnu)</a></li>
                <li><a href="camps/camp-mannheim.php#Gaston_Roussel">ROUSSEL Gaston</a></li>
                <li><a href="poilus/DUBOIS-Emile-Edmond.php#Duperrier_Selva">SELVA (prénom inconnu)</a></li>
                <li><a href="poilus/FIEVET-Auguste-Victor.php#VonEmmich-Sordet">SORDET André</a></li>
                <li><a href="camps/camp-meyenburg.php#Lucien_Theaud">THEAUD Lucien</a></li>
                <li><a href="poilus/CARLIER-Druon-Joseph.php#Fournier">WILLE (prénom inconnu)</a></li>
            </ul>
            ';

            CompterLi($ListePoilusInconnus);

            ?>

            <br />

            <h2>Inde</h2>

            <?php
            $ListePoilusInde='
            <ul>
                <li><a href="tombes/awoingt.php#cma">SINGH Udmi</a></li>
            </ul>
            ';

            CompterLi($ListePoilusInde);

            ?>

        </div>

        </article>

    </section>

</div>

<!-- pied de page -->

<div class="container-fluid">

    <div class="container">

    <footer class="row mt-4">
        <?php include('include/footer.inc'); ?>
    </footer>

    </div>

</div>

<!-- Ici on compte le nombre de poilus -->

<script type="text/javascript">
    document.getElementById("NombrePoilus").innerHTML = "des <strong><?php echo $GLOBALS['total']; ?></strong> ";
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!-- Fenêtre modale de contact -->
<?php include $_SERVER['DOCUMENT_ROOT'].'./include/contact.inc'; ?>

<!-- code pour Matomo modifié pour prendre en compte Tarteaucitron.js -->

<script type="text/javascript">
  tarteaucitron.user.matomoId = 4;
  tarteaucitron.user.matomoHost = '//www.genealexis.fr/piwik/';
  (tarteaucitron.job = tarteaucitron.job || []).push('matomohightrack');
</script>

</body>
</html>