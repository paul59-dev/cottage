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
                        ?>

                        <div>
                            <img src="../images/LOGO-COTTAGE-2.jpg" />
                            <h3>Merci <?php echo $name ?> <?php echo $lastname ?>,</h3>
                            <p>Votre <?php echo $objet ?> en <?php echo $room ?>,</p> 
                            <p>Le <?php echo $date ?> de <?php echo $time1 ?> à <?php echo $time2 ?>,</p> 
                            <p>Avec <?php echo $pc ?> matériel informatique à <span style="color: #61CE70;"><b>bien été envoyer</b></span> !</p>
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