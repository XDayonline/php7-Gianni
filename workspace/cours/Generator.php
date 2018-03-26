<?php
$compliments = [
    "gentil",
    "beau",
    "mignon",
    "aimable"
    ];
$quantites = [
    "très",
    "hyper",
    "grave",
    "super"
];
$verbes = [
    "félicite",
    "remercie",
    "admire",
];

$compliment=$compliments[mt_rand(0, count($compliments))-1];
$quantite=$quantites[mt_rand(0, count($quantites))-1];
$verbe=$verbes[mt_rand(0, count($verbes))-1];


print "Tu es ".$quantite." ".$compliment." je te " .$verbe;
