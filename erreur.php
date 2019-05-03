<!doctype html>
<html lang="fr">

    <head>

        <meta charset="utf-8">

        <title>Page non trouvée et plan du site - Histoires de Poilus</title>

        <meta name="description" content="Plan du site avec liste des rubriques disponibles">
        <meta name="google-site-verification" content="NrJvg2SL3r8GToGISpF-SJatGnKIvS5mekxb-2uTef4" />

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/resp.css">
        <link rel="stylesheet" href="css/fontawesome/css/all.css">  

        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/png" href="images/favicon.png" />

    </head>

    <body>

    <!-- code js pour l'avertissement sur les cookies -->

    <script src="/js/cookiechoices.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsentBar('En naviguant sur le site, vous acceptez l'utilisation de cookies pour vous proposer une navigation optimale et me permettre de réaliser des statistiques de visites.',
    'Ok', 'En savoir plus', 'cookies.php');
    });
    </script>

    <?php include('include/resp.inc'); ?>

    <header>

        <?php include('include/social.inc'); ?>

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

            <p>Oups ! La page que vous demandez n'a pas été trouvée !<br/>Peut-être a t-elle été déplacée ou supprimée ?</p>

            <figure>
                <img src="/images/periscope.jpg" alt=""/>
            </figure>

        </article>

        <article id="plan">

            <h2>Plan du site</h2>

            <div class="col3">

            <ul>
                <li><a href="/index.php">Accueil</a></li>
                <li><a href="/lieux.php">Les Batailles</a>
                <ul>
                    <li><a href="/batailles/batailles-est.php">L'Europe de l'Est</a></li>
                    <li><a href="/batailles/batailles-ouest.php">L'Europe de l'Ouest</a></li>
                    <li><a href="/batailles/batailles-italie.php">Le Front Italien</a></li>
                    <li><a href="/batailles/batailles-afrique.php">Le Front Africain</a></li>
                    <li><a href="/batailles/batailles-orient.php">Le Front du Moyen-Orient</a></li>
                    <li><a href="/batailles/batailles-balkans.php">Le Front des Balkans</a></li>
                </ul>
                </li>
                <li>Les Hôpitaux</li>
                <li><a href="/releves.php">Les Relevés</a>
                <ul>			
                    <li>Nord		  
                        <ul>				
                            <li><a href="/releves/anzin.php">Anzin</a></li>
                            <li><a href="/releves/bry.php">Bry</a></li>
                            <li><a href="/releves/capelle.php">Capelle-sur-Ecaillon</a></li>
                            <li><a href="/releves/cousolre.php">Cousolre</a></li> 
                            <li><a href="/releves/eth.php">Eth</a></li>
                            <li><a href="/releves/gussignies.php">Gussignies</a></li>
                            <li><a href="/releves/lourches.php">Lourches</a></li>
                            <li><a href="/releves/onnaing.php">Onnaing</a></li>    
                            <li><a href="/releves/quarouble.php">Quarouble</a></li>
                            <li><a href="/releves/roeulx.php">Roeulx</a></li>
                            <li><a href="/releves/santes.php">Santes</a></li>
                            <li><a href="/releves/saultain.php">Saultain</a></li>
                            <li><a href="/releves/sebourg.php">Sebourg</a></li>
                            <li><a href="/releves/vicq.php">Vicq</a></li>
                            <li><a href="/releves/villers-guislain.php">Villers-Guislain</a></li>
                            <li><a href="/releves/wargnies.php">Wargnies-le-Grand</a></li>    
                        </ul> 
                    </li>		  
                    <li>Marne
                    <ul>	
                        <li><a href="/releves/betheniville.php">Bétheniville</a></li>
                        <li><a href="/releves/isles-sur-suippes.php">Isles-sur-Suippes</a></li>
                        <li><a href="/releves/saint-hilaire-le-petit.php">Saint-Hilaire-le-Petit</a></li>
                    </ul>
                    </li>
                    <li>Côte-d'Or
                    <ul>	
                        <li><a href="/releves/daix.php">Daix</a></li>
                    </ul>
                    </li>
                    <li>Yvelines
                    <ul>
                        <li><a href="/releves/feucherolles.php">Feucherolles</a></li>
                    </ul>
                    </li>		
                    <li>Pas-de-Calais
                    <ul>
                        <li><a href="/releves/frencq.php">Frencq</a></li>
                    </ul>
                    </li>
                    <li>Aube
                    <ul>  	
                        <li><a href="/releves/gelannes.php">Gélannes</a></li>
                    </ul>	
                    </li>	
                    <li>Ardennes
                    <ul> 
                        <li><a href="/releves/verpel.php">Verpel</a></li>
                    </ul>	
                    </li>
                    </ul>		
                </li>
                <li><a href="camps.php">Les camps allemands</a>
                <ul>
                    <li><a href="/camps/camp-bad-orb.php">Bad Orb</a></li>
                    <li><a href="/camps/camp-bochum.php">Bochum</a></li>
                    <li><a href="/camps/camp-chemnitz.php">Chemnitz</a></li>
                    <li><a href="/camps/camp-czersk.php">Czersk</a></li>
                    <li><a href="/camps/camp-darmstadt.php">Darmstadt</a></li>
                    <li><a href="/camps/camp-dortmund.php">Dortmund</a></li>
                    <li><a href="/camps/camp-forstort.php">Förstört</a></li>
                    <li><a href="/camps/camp-frankfurt.php">Francfort-sur-le-Main</a></li>

                    <li><a href="/camps/camp-friedberg.php">Friedberg</a></li>
                    <li><a href="/camps/camp-friedrichsfeld.php">Friedrichsfeld</a></li>
                    <li><a href="/camps/camp-gardelegen.php">Gardelegen</a></li>
                    <li><a href="/camps/camp-giessen.php">Giessen</a></li>
                    <li><a href="/camps/camp-gorlitz.php">Görlitz</a></li>

                    <li><a href="/camps/camp-grafenwohr.php">Grafenwöhr</a></li>
                    <li><a href="/camps/camp-guben.php">Guben</a></li>
                    <li><a href="/camps/camp-hagen.php">Hagen</a></li>
                    <li><a href="/camps/camp-hammelburg.php">Hammelburg</a></li>
                    <li><a href="/camps/camp-hammerstein.php">Hammerstein</a></li>
                    <li><a href="/camps/camp-herne.php">Herne</a></li>

                    <li><a href="/camps/camp-heuberg.php">Heuberg</a></li>
                    <li><a href="/camps/camp-lechfeld.php">Lechfeld</a></li>
                    <li><a href="/camps/camp-limburg.php">Limburg</a></li>
                    <li><a href="/camps/camp-mannheim.php">Mannheim</a></li>        
                    <li><a href="/camps/camp-meschede.php">Meschede</a></li>

                    <li><a href="/camps/camp-merzdorf.php">Merzdorf</a></li>
                    <li><a href="/camps/camp-meyenburg.php">Meyenburg</a></li>
                    <li><a href="/camps/camp-minden.php">Minden</a></li>
                    <li><a href="/camps/camp-munster.php">Munster</a></li> 
                    <li><a href="/camps/camp-nurnberg.php">Nuremberg</a></li>

                    <li><a href="/camps/camp-regensburg.php">Rastisbonne</a></li> 
                    <li><a href="/camps/camp-ruhleben.php">Ruhleben</a></li> 
                    <li><a href="/camps/camp-schneidemuhl.php">Schneidemühl</a></li>   
                    <li><a href="/camps/camp-westhofen.php">Westhofen</a></li> 
                    <li><a href="/camps/camp-wetzlar.php">Wetzlar</a></li>  
                    <li><a href="/camps/camp-wurzburg.php">Würzburg</a></li>

                    <li><a href="/camps/camp-zerbst.php">Zerbst</a></li>
                    <li><a href="/camps/camp-wunsdorf.php">Zossen-Wünsdorf </a></li> 
                </ul>
                </li>
                <li>Les camps néerlandais
                <ul>
                    <li><a href="/camps-nl/camp-amersfoort.php">Amersfoort</a></li>
                    <li><a href="/camps-nl/camp-assen.php">Assen</a></li>
                    <li><a href="/camps-nl/camp-bodegraven.php">Bodegraven</a></li>   
                    <li><a href="/camps-nl/camp-harderwijk.php">Harderwijk</a></li> 
                    <li><a href="/camps-nl/camp-kampen.php">kampen</a></li>   
                    <li><a href="/camps-nl/camp-leeuwarden.php">Leeuwarden</a></li>
                    <li><a href="/camps-nl/camp-loosduinen.php">Loosduinen</a></li>     
                    <li><a href="/camps-nl/camp-zeist.php">Zeist</a></li>
                    <li><a href="/camps-nl/camp-zwolle.php">Zwolle</a></li>
                </ul>
                </li>
                <li>Les camps d'internement suisses</li>	
                <li>Hôpitaux français
                <ul>
                    <li><a href="/hopitaux/hopitaux-ara.php">Auvergne-Rhône-Alpes</a></li>
                    <li><a href="/hopitaux/hopitaux-bfc.php">Bourgogne-Franche-Comté</a></li>
                    <li><a href="/hopitaux/hopitaux-bre.php">Bretagne</a></li>
                    <li><a href="/hopitaux/hopitaux-cvl.php">Centre-Val de Loire</a></li>
                    <li><a href="/hopitaux/hopitaux-cor.php">Corse</a></li>
                    <li><a href="/hopitaux/hopitaux-ges.php">Grand Est</a></li>
                    <li><a href="/hopitaux/hopitaux-hdf.php">Hauts-de-France</a></li>
                    <li><a href="/hopitaux/hopitaux-idf.php">Île-de-France</a></li>
                    <li><a href="/hopitaux/hopitaux-nor.php">Normandie</a></li>
                    <li><a href="/hopitaux/hopitaux-naq.php">Nouvelle-Aquitaine</a></li>
                    <li><a href="/hopitaux/hopitaux-occ.php">Occitanie</a></li>
                    <li><a href="/hopitaux/hopitaux-pdl.php">Pays de la Loire</a></li>
                    <li><a href="/hopitaux/hopitaux-pac.php">Provence-Alpes-Côte d'Azur</a></li>
                </ul>
                </li>
                <li>Les soldats belges
                <ul>
                    <li><a href="/poilus/amand-jules.php"  class="AsideSelected">AMAND Jules (+)</a></li>
                    <li><a href="/poilus/quintin-raoul.php">QUINTIN Raoul (+)</a></li>
                </ul>
                </li>
                <li>Les poilus de la Côte-d'Or
                <ul>
                    <li><a href="/poilus/FROIDUROT-Alfred.php"  class="AsideSelected">FROIDUROT Alfred</a></li>
                    <li><a href="/poilus/froidurot-alphonse.php">FROIDUROT Alphonse</a></li>
                </ul>
                </li>
            <li>Les poilus de la Marne
            <ul>
                <li><a href="/poilus/arnould-henri-rene.php">ARNOULD Henri René (+)</a></li>
                <li><a href="/poilus/astiers-jules-alphonse.php">ASTIER(S) Jules Alphonse</a></li>
                <li><a href="/poilus/BALTAZART-Ernest-Auguste.php">BALTAZART Ernest Auguste</a></li>
                <li><a href="/poilus/caron-eugene-alexandre.php">CARON Eugène Alexandre</a></li>
                <li><a href="/poilus/MAILLART-Alexandre.php">MAILLART Alexandre Ernest</a></li>
                <li><a href="/poilus/MICHEL-Firmin.php">MICHEL Firmin (+)</a></li>
                <li><a href="/poilus/paquet-leopold.php">PAQUET Léopold</a></li>
            </ul>
            </li>
            <li>Les poilus du Nord
            <ul>		
                <li><a href="/poilus/bottiau-raphael-joseph.php">BOTTIAU Raphaël Joseph</a></li>
                <li><a href="/poilus/boucher-gervais.php">BOUCHER Gervais</a></li>
                <li><a href="/poilus/boursier-edmond.php">BOURSIER Edmond</a></li>
                <li><a href="/poilus/BOURSIER-Jules.php">BOURSIER Jules Henri</a></li>
                <li><a href="/poilus/CARIN-Edouard.php">CARIN Édouard (+)</a></li>
                <li><a href="/poilus/carin-joseph.php">CARIN Joseph</a></li>
                <li><a href="/poilus/CARIN-Leon.php">CARIN Léon (+)</a></li>
                <li><a href="/poilus/CARIN-Theophile.php">CARIN Théophile</a></li>
                <li><a href="/poilus/CARLIER-Druon-Joseph.php">CARLIER Druon Joseph</a></li>
                <li><a href="/poilus/CARLIER-Louis-Abraham.php">CARLIER Louis Abraham</a></li>
                <li><a href="/poilus/delaux-oscar-julien.php">DELAUX Oscar Julien</a></li>
                <li><a href="/poilus/DUBOIS-Emile-Edmond.php">DUBOIS Émile Edmond (+)</a></li>
                <li><a href="/poilus/dubois-jean-charles.php">DUBOIS Jean Charles (+)</a></li>
                <li><a href="/poilus/FIEVET-Auguste-Victor.php">FIEVET Auguste Victor</a></li>
                <li><a href="/poilus/FIEVET-Charles-Augustin.php">FIEVET Charles Augustin</a></li>
                <li><a href="/poilus/FONTAINE-Henri-Gustave.php">FONTAINE Henri Gustave</a></li>
                <li><a href="/poilus/GRAIN-Leon-Albert.php">GRAIN Léon Albert</a></li>
                <li><a href="/poilus/GRAIN-Louis.php">GRAIN Louis</a></li>
                <li><a href="/poilus/hanze-augustin.php">HANZE Augustin (+)</a></li>
                <li><a href="/poilus/JOLY-Noel-Jules.php">JOLY Noël Jules</a></li>
                <li><a href="/poilus/lamandin-georges.php">LAMANDIN Georges (+)</a></li>
                <li><a href="/poilus/lesage-jules-joseph.php">LESAGE Jules Joseph</a></li>
                <li><a href="/poilus/LETIENNE-Florimond.php">LETIENNE Florimond</a></li>
                <li><a href="/poilus/magny-jules.php">MAGNY Jules</a></li>
                <li><a href="/poilus/mascart-emile.php">MASCART Émile</a></li>
                <li><a href="/poilus/mascart-leon.php">MASCART Léon</a></li>
                <li><a href="/poilus/mascart-leon-2.php">MASCART Léon (+)</a></li>
                <li><a href="/poilus/mascart-louis.php">MASCART Louis (+)</a></li>
                <li><a href="/poilus/patou-druon-adrien.php">PATOU Druon Adrien (+)</a></li>
                <li><a href="/poilus/pelez-alfred.php">PELEZ Alfred</a></li>
                <li><a href="/poilus/rousseaux-eugene-fernand.php">ROUSSEAUX Eugène Fernand</a></li>
                <li><a href="/poilus/ROUSSEAUX-Louis.php">ROUSSEAUX Louis Henri (+)</a></li>
                <li><a href="/poilus/tiburce-louis.php">TIBURCE Louis</a></li>
                <li><a href="/poilus/VELU-Adrien.php">VELU Adrien (+)</a></li>		           	      
            </ul>
            </li>
                <li><a href="/poilus/mobilisation-1914.php">Décret de mobilisation générale (1914)</a></li>
                <li><a href="/poilus/jorf-3-juillet-1930.php">Attribution des cartes d'ancien combattant (1930)</a></li>
                <li><a href="/poilus/dossier-ancien-combattant-01.php">Dossier d'ancien combattant de FIEVET Auguste Victor</a></li>
                <li><a href="/webographie.php">Webographie</a></li>
                <li><a href="/contact.php">Contact</a></li>
                <li><a href="/mentions.php">Mentions Légales</a></li>
                <li><a href="/cookies.php">Cookies</a></li>
            </ul>

            </div>

        </article>

        <p class="sources">
        <?php setlocale(LC_ALL,'french');echo "Dernière modification effectuée le ".date("j/m/Y", getlastmod()); ?> 
        </p>

    </section>

    <footer><?php include('include/footer.inc'); ?></footer>

    <?php include('include/stats.inc'); ?>

    <!-- javascript -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    </body>
</html>