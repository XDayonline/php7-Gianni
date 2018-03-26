<?php
//Changer __DIR__ pour aller dans 06_alphaseries
$dir = str_replace("\src","",__DIR__);

//Récupérer les données
$json = file_get_contents($dir.'/data/shows.json');
$shows = json_decode($json, true);

$slug = $_GET['slug'];
$serie = $shows[$slug];
