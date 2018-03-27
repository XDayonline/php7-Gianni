<?php
session_start();
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = [];
}
$firstname = 'Anonyme';
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
$_SESSION['history'][] = sprintf(
    'Heure : %s - %s',
    date('H:i:s'),
    $email
);
?>
