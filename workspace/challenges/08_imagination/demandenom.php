<?
class Souris
{
    public $clicdroit;
    public function enleverClic()
    {
        $this->clicdroit = "non activé";
    }
    public function __construct($clicdroit)
    {
        $this->clicdroit = $clicdroit;
    }
    public function __toString(){
        return "Clic ".$this->clicdroit;
    }
}
$sourisnonallume = new Souris("non activé");
$sourisallume = new Souris("activé");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Souris</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<main role="main">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Souris</h1>
            <p><?php print $sourisallume->__toString();?></p>
        </div>
    </div>
</main>
</body>
</html>
