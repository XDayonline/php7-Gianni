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

$compliment=$compliments[mt_rand(0, count($compliments)-1)];
$quantite=$quantites[mt_rand(0, count($quantites)-1)];
$verbe=$verbes[mt_rand(0, count($verbes)-1)];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>
<body>
<main role="main">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Jumbotron</h1>
            <p style="font-size: 2em;">
                <?php print "Tu es ". $quantite . " " . $compliment ." je te " . $verbe;?>
            </p>

            <p><a href="./index.php" class="btn btn-primary btn-lg" role="button">Button</a></p>
        </div>
    </div>
</main>

<footer class="container">
    <p>&copy; Bootstrap 2018</p>
</footer>
</body>
</html>