<?php include "../../res/components/header.php"; ?>
<link rel="stylesheet" href="../css/send.css" />
</head>
<body>
    <?php

    if (isset($_POST['send'])) 
    {
        if (isset($_POST['objet']) AND isset($_POST['lastname']) AND isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST["date"]) AND isset($_POST['time1']) AND isset($_POST['time2']) AND isset($_POST['salle'])) 
        {
            if (!empty($_POST['objet']) AND !empty($_POST['lastname']) AND !empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST["date"]) AND !empty($_POST['time1']) AND !empty($_POST['time2']) AND !empty($_POST['salle'])) 
            {
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
                {
                    if ($_POST['time1'] != $_POST['time2']) 
                    {
                        $room = htmlspecialchars($_POST['salle']);
                        $objet = htmlspecialchars($_POST['objet']);
                        $lastname = htmlspecialchars($_POST['lastname']);
                        $name = htmlspecialchars($_POST['name']);
                        $email = htmlspecialchars($_POST['email']);
                        $date = htmlspecialchars($_POST['date']);
                        $time1 = htmlspecialchars($_POST['time1']);
                        $time2 = htmlspecialchars($_POST['time2']);
                        $pc = htmlspecialchars($_POST['pc']);

                        // EMAIL
                        // => access in produc
                        $destil = "sduaez@cottage.fr";

                        $mail_entete = "MIME-Version: 1.0\r\n";
                        $mail_entete .= "From: assistance@cottage.fr";
                        $email_entete .= 'Reply-To ' . $destil . "\r\n";
                        $mail_entete .= 'Content-Type: text/html; charset="UTF-8"';
                        $mail_entete .= "\r\nContent-Transfer-Encoding: 8bit\r\n";
                        $mail_entete .= 'X-Mailer:PHP/' . phpversion() . "\r\n";
                        // Sujet mail
                        $sujet = "Demande de reservation de la " .$room;
                        // Corps du mail
                        $mail_corps = "Message de : <b>" .$lastname . $name . "<b><br/>";
                        $mail_corps .= "Addresse mail : <b>" . $mail_user . "</b><br/>";
                        $mail_corps .= "--------------------<br/>";
                        $mail_corps .= "Salle : <b>" .$salle . "<br/>";
                        $mail_corps .= "Objet de la réservation : <b>" . $objet . "</b><br />";
                        $mail_corps .= "Le : <b>" .$date;
                        $mail_corps .= "De <b>" . $time1 . " a " . $time2 . "</b><br />";

                        if (mail($destil, $sujet, $mail_corps, $mail_entete))
                        {
                            header('Location: send.php');
                        } else {
                            echo '<script>alert("Une erreur est survenue")</script>';
                        }
                        
                        ?>

                        <div>
                            <img src="../images/LOGO-COTTAGE-2.jpg" />
                            <h3>Merci <?php echo $name ?> <?php echo $lastname ?>,</h3>
                            <p>Votre <?php echo $objet ?> en <?php echo $room ?>,</p> 
                            <p>Le <?php echo $date ?> de <?php echo $time1 ?> à <?php echo $time2 ?>,</p> 
                            <p>Avec <?php echo $pc ?> matériel informatique à <span style="color: #61CE70;">bien été envoyer</span> !</p>
                            <p>Votre adresse mail : <?php echo $email ?></p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <form action="../../index.php">
                                <button class="btn waves-effect waves-light" type="submit" name="action">
                                    Page de réservation
                                </button>
                            </form>
                        </div>

    <?php    
                    }
                }
            }
        }
    }

    ?>
</body>
</html>