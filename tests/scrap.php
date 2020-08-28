<?php

$codesource = file_get_contents('http://127.0.0.1/Histoires%20De%20Poilus/poilus.php');

preg_match_all("#<h1(.+)</h1>#iU", $codesource, $tableau_resultat);

echo "<b>liste des h1</b>";

echo "<pre>";
print_r($tableau_resultat[1]);
echo "</pre>";

preg_match_all("#<h2(.+)</h2>#iU", $codesource, $tableau_resultat);

echo "<b>liste des h2</b>";

echo "<pre>";
print_r($tableau_resultat[1]);
echo "</pre>";

preg_match_all("#<h3(.+)</h3>#iU", $codesource, $tableau_resultat);

echo "<b>liste des h3</b>";

echo "<pre>";
print_r($tableau_resultat[1]);
echo "</pre>";

echo "<b>titre</b>";

preg_match_all("#<title>(.+)</title>#iU",$codesource,$regs); //on isole le titre

echo "<pre>";
print_r($regs[1]); 
echo "</pre>";

?>