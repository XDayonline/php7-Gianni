<?php
$text = file_get_contents('fichier_texte.txt');
$nba = substr_count($text, 'a');
print "A : " . $nba . "\n";
