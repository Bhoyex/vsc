<?php

//Se connecter à la base de données

$dbhost = 'localhost'; //addresse de la db
$dbname = 'vsc_db';
$dbuser = 'root';
$dbpassword = '';






function printPHPError()
{
    error_reporting(E_ALL & ~E_DEPRECATED);
    ini_set("display_errors", 1);
}
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}


try{
    $db = new PDO(
        'mysql:host='.$dbhost.';dbname='.$dbname,
        $dbuser,
        $dbpassword,
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        )
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){

    die("Impossible de se connecter a la base de donnees😩!!!");
}


