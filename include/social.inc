<div id="rezo">
    
    <?php
    /* Récupération de l'url de la page en cours */
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
    ?> 
    
      <a href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>" title="Partager cette page sur Facebook">
        <i class="fab fa-facebook"></i></a>
      <a href="https://www.instagram.com/alexisamand/" title="Voir le compte Instagram du webmaster">
        <i class="fab fa-instagram"></i></a>
      <a href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>" title="Partager cette page sur Twitter">
		    <i class="fab fa-twitter-square"></i></a>
	  <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>" title="Partager cette page sur LinkedIn"> 	
		    <i class="fab fa-linkedin"></i></a>
		
</div>