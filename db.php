<?php

$dbhost = 'localhost';
$dbname = 'cities';
$username = 'root';
$password = 'root';
$port = 8889;

$db = new PDO("mysql:host=$dbhost; dbname=$dbname, $username, $password, $port");

function get_cities() {
    global $db;
    $cities = $db->query ("SELECT * FROM `cities`");
    return $cities;
}
?>