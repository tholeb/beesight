<?php
header('Content-Type: text/html; charset=utf-8');
$aURL = __DIR__."/";
$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';
if ($_SERVER['HTTP_HOST'] == 'localhost') {
  $wURL = "$protocol://$_SERVER[HTTP_HOST]/" . basename(__DIR__) . "/";
} else {
  $wURL = "$protocol://$_SERVER[HTTP_HOST]/";
}
$GLOBAL['title'] = "BeeSight";
require $aURL.'assets/resources/config/database.php';

// try
//  {
//   $bdd = new PDO('mysql:host='.$hostname.';dbname='.$namebase.'', $username, $password);
//   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  }
//   catch (PDOException $e)
//  {
//   // If an error is thrown, display the message
//   die('Erreur : ' . $e->getMessage());
//   echo 'Échec lors de la connexion ' . $namebase . ': ' . $e->getMessage();
//  }
  ?>
