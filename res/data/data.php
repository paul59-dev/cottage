<?php 

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=cottage_users', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e -> getMessage());
    }

?>