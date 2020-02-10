<!doctype html>
<html lang="fr">

    <head>

        <meta charset="utf-8">

        <title>Le décret de mobilisation générale du 1 août 1914</title>
        <meta content="Le décret de mobilisation générale du 1 août 1914 publié dans le Journal Officiel du 2 août 1914" name="description"/>

        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/resp.css">
        <link rel="stylesheet" href="../css/fontawesome/css/all.css">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/png" href="../images/favicon.png"/>
    
    </head>

    <body>

    <!-- code js pour l'avertissement sur les cookies -->

    <script src="../js/cookiechoices.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsentBar('En naviguant sur le site, vous acceptez l'utilisation de cookies pour vous proposer une navigation optimale et me permettre de réaliser des statistiques de visites.',
    'Ok', 'En savoir plus', '../cookies.php');
    });
    </script>

    <?php include('../include/resp.inc'); ?>

    <header>

        <?php include('../include/social.inc'); ?>

        <a href="../index.php" title="Retour sur la page d'accueil du site">
        <img src="../images/logo.png" class="logo" alt="Logo du site Histoires de Poilus"/></a>

    </header>

    <nav>
        <a href="../contact.php">Contact</a>
        <a href="../webographie.php">Webographie</a>
        <a href="../lieux.php">Les Batailles</a>
        <a href="../camps.php">Les Camps</a>
        <a href="../releves.php">Les Relevés</a>
        <a href="../hopitaux/hopitaux.php">Les Hôpitaux</a>
        <a href="../poilus.php" class="NavSelected">Les Poilus</a>
    </nav>

    <div id="navbis">
        <a href="amand-hoche.php">Les poilus du Nord</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="arnould-gaston.php">Les poilus de la Marne</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="FROIDUROT-Alfred.php">Les poilus de la Côte-d'Or</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="amand-jules.php">Les jasses de Belgique</a>
    </div>

    <section>

        <article>

        <h2>Décret de mobilisation générale</h2>

        <p>Extrait du Journal Officiel de la République Française n°156 du 2 août 1914.<br>
        Décret prescrivant la mobilisation des Armées de terre et de mer du 1er août 1914.<br>
        (source: Gallica / Bibliothèque Nationale de France)</p>

        <figure>
            <a href="sources/mobilisation-1914-01.jpg" data-fancybox="gallery" data-caption="Le décret de mobilisation générale du 1er août 1914">
            <img src="miniatures/mobilisation-1914-01.jpg" alt="Texte du décret de mobilisation générale daté du 1er août 1914"></a>
        </figure>

        <figure>
            <a href="sources/mobilisation-1914-02.jpg" data-fancybox="gallery" data-caption="Le décret de mobilisation générale du 1er août 1914">
            <img src="miniatures/mobilisation-1914-02.jpg" alt="Texte du décret de mobilisation générale daté du 1er août 1914"></a>
        </figure>

        <figure>
            <a href="sources/mobilisation-1914-03.jpg" data-fancybox="gallery" data-caption="Le décret de mobilisation générale du 1er août 1914">
            <img src="miniatures/mobilisation-1914-03.jpg" alt="Texte du décret de mobilisation générale daté du 1er août 1914"></a>
        </figure>

        <p class="sources"><?php setlocale(LC_ALL,'french');echo "Dernière modification effectuée le ".date("j/m/Y", getlastmod()); ?></p>
        
        </article>

    </section>

    <footer><?php include('../include/footer.inc'); ?></footer>

    <?php include('../include/stats.inc'); ?>

    <!-- javascript -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    <script type="text/javascript" src="../js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>

    </body>
</html>