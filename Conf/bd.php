<?php
$hostname = '38.25.76.156';
$username = 'root';
$password = '';
$database = 'clinica';
$port ='4000';

$mysqli = new mysqli($hostname, $username, $password, $database,$port);

function getOpciones()
{
    global $mysqli; 
     $result =  $mysqli->query('SELECT opciones FROM `menu-sidebar`');
    return $result;
}


?>
