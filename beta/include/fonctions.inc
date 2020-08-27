<?php

/* cette fonction gére les vignettes de la galerie */

function AncienCombattant($dossier, $pages)       
    {
    for ($i = 1;$i<= $pages;$i++)
        {
        echo '<figure class="vignette">';
        echo '<img src="images/'.$dossier.'/thumbs/page_'.$i.'.png"';
        echo 'onclick="document.getElementById(\'testgal\').src=\'images/'.$dossier.'/page_'.$i.'.jpg\';
        document.getElementById(\'testgal2\').href=\'images/'.$dossier.'/page_'.$i.'.jpg\';"/>';
        echo '<figcaption>vue '.$i.' / '.$pages.'</figcaption>';
        echo '</figure>';
        }
    }
?>