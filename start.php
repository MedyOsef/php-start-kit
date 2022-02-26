<?php
/* Pour la gestion des erreurs */ 
try{
    $bdd = new PDO('mysql:host=localhost;dbname=formation_users;charset=utf8', 'root', '');
  } catch(Exception $e){
    die('erreur : '.$e->getMessage());
  }
?>
