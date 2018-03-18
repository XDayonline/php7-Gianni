<?php

if (count($argv) == 4) {
    $firstNumber = $argv[1];
    $secondNumber = $argv[3];
    $typeOfOperation = $argv[2];
    if (is_numeric($firstNumber) && is_numeric($secondNumber)) {
        switch ($typeOfOperation) {
            case '+':
                $result = $firstNumber + $secondNumber;
                echo $result . "\n";
                break;
            case '-':
                $result = $firstNumber - $secondNumber;
                echo $result . "\n";
                break;
            case 'x':
                $result = $firstNumber * $secondNumber;
                echo $result . "\n";
                break;
            case '/':
                if ($secondNumber != 0) {
                    $result = $firstNumber / $secondNumber;
                    echo $result . "\n";
                } else {
                    echo "Divisions par 0 impossible";
                }
                break;
            default:
                echo "Veuillez recommencer! \n";
        }
    } else {
        echo "Argument non valide \n";
    }
} else {
    echo "Trop d'arguments";
}

