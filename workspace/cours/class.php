<?php
class Souris{
    public $dpi;
    public $eclairage;
    public $boutonsurlecote;
    protected $clicdroit = "non activé";

    public function clic(){
        $this->clicdroit = "activé";
    }
    public function enleverClic(){
        $this->clicdroit = "non activé";
    }
    public function __construct($clicdroit)
    {
        $this->clicdroit = $clicdroit;
    }
    public function __toString(){
    return "\nClic ".$this->clicdroit." ".$this->dpi." ".$this->eclairage." ".$this->boutonsurlecote;
    }
}

$maSouris = new Souris("non activé");
$maSouris->dpi=5000;
$maSouris->eclairage=true;
$maSouris->boutonsurlecote=true;
$lautresouris = new Souris("non activé");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yeah</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<main role="main">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Souris gamer</h1>
            <pre>
                <?php
                $maSouris->clic();
                print $maSouris->__toString()."\n";
                print $lautresouris->__toString();
                ?>
            </pre>
        </div>
    </div>
</main>

<footer class="container">
    <p>&copy; Bootstrap 2018</p>
</footer>
</body>
</html>
