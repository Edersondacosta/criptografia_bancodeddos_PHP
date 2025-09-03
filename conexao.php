<?php
$servername = "localhost";
$username   = "ederson";   
$password   = "ederson";       
$dbname     = "sistema_login";
$port       = "3310";

$conn = new mysqli($servername, $username,
$password, $dbname, $port);

if($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>