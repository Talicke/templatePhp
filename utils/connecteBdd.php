<?php
    //connexion à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=templatePhp', 'root','', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>