<?php 

    session_start();

    $formcode = $_POST['pedocode'];
    $formsend = $_POST['connexion'];

    if (isset($formcode))
    {
        include './data.php';
        $sel = $db->prepare('select prenom, nom, email from users where pedocode = ? limit 1');
        $sel->execute(array($formcode));
        $tab = $sel->fetchAll();

        if (count($tab) > 0)
        {
            $_SESSION['prenom'] = $tab[0]['prenom'];
            $_SESION['nom'] = $tab[0]['nom'];
            $_SESSION['email'] = $tab[0]['email'];

            header('Location:../pages/home.php');
        }
    }

?>