<?php
require_once (__DIR__ . '/src/banniere.php');
$slug = $serie['slug'];
header("Location: serie.php?slug=".$slug);
