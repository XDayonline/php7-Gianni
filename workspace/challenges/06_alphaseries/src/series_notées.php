<?php
//Changer __DIR__ pour aller dans 06_alphaseries
$dir = str_replace("\src","",__DIR__);

//Récupérer les données
$json = file_get_contents($dir.'/data/shows.json');
$shows = json_decode($json, true);

//Fonction pour trier les séries, si la série 1 est moins bien notée que la 2 alors elle retourne 1
function triNote($showA, $showB) {
    if ($showA['statistics']['rating'] < $showB['statistics']['rating']) {
        return 1;
    }
    return 0;
}

//On trie les séries avec notre fonction en paramètre
usort($shows, 'triNote');

//On ne choisit que les 3 meilleures séries
$ratingShows = array_slice($shows, 0, 3);
