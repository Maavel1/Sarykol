<?php

$dbhost = 'localhost';
$dbname = 'main_page;
$username = 'root';
$password = 'root';
$port = 8889;

$db = new PDO("mysql:host=$dbhost; dbname=$dbname, $username, $password, $port");

function get_news() {
    global $db;
    $news = $db->query ("SELECT * FROM `news`");
    return $news;
}