<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'Alphasport';

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("Conexion Fallida");
}


?>