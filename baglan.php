<?php 

$dsn = 'mysql:host=localhost:3306;dbname=bubilet;charset=utf8' ;

$user = 'root';

$password = '';

try {

$db = new PDO($dsn, $user, $password);
$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
} catch (PDOException $e) {

echo 'Hata Olustu ! <br> <br> Sebebi : <br> <br> ' . $e->getMessage();

}




?>