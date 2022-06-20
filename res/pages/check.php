<?php 
    session_start();

    include "../components/header.php";

    $formcode = $_POST['pedocode'];
    $formsend = $_POST['connexion'];

    if (isset($formcode))
    {
        include '../data/data.php';
        $sel = $db->prepare('select * from users where pedocode = ? limit 1');
        $sel->execute(array($formcode));
        $tab = $sel->fetchAll();

        if (count($tab) > 0)
        {
            $_SESSION['prenom'] = $tab[0]['prenom'];
            $_SESSION['nom'] = $tab[0]['nom'];
            $_SESSION['email'] = $tab[0]['email'];

            header('Location:home.php');
        } else {
            ?>
            
            <div class="container-erreur">

                <h1 class="bound">
                    <span>E</span>
                    <span>R</span>
                    <span>R</span>
                    <span>E</span>
                    <span>U</span>
                    <span>R</span>
                </h1>
                
                <p>Votre pedocode n'est pas valide !</p>

                <div class="progress">
                    <div class="indeterminate"></div>
                </div>

                <a href="../../index.php">Page d'accueil</a>

            </div>

            <?php
        }
    }

?>