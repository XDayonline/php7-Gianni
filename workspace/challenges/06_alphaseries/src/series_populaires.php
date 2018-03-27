<?php
//Changer __DIR__ pour aller dans 06_alphaseries
$dir = str_replace("\src","",__DIR__);

//Récupérer les données
$json = file_get_contents($dir.'/data/shows.json');
$shows = json_decode($json, true);

function triPopularite($showA, $showB) {
    if ($showA['statistics']['popularity'] < $showB['statistics']['popularity']) {
        return 1;
    }
    return 0;
}

usort($shows, 'triPopularite');

$popularShows = array_slice($shows, 0, 3);

$popularShows2 = array_slice($shows, 0, 10);