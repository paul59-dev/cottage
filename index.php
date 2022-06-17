<?php include './res/data/data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- ====== /MATERIALIZE - CSS - FONT AWESOME ======= -->
    <link rel="stylesheet" href="./res/css/style.css">
</head>
<body>
    
<div class="connexion-container">

    <img src="./res/images/LOGO-COTTAGE-2.jpg" alt="Logo Cottage">
    <form action="./res/data/check.php" method="POST">
        <div class="pedocode">
            <input type="text" name="pedocode" required autocomplete="off">
            <div class="underline"></div>
            <label>Votre pedocode</label>
        </div>
        <div class="btn-container">
            <button id="btn-connexion" class="btn waves-effect waves-light btn-connexion blue darken-4" type="submit" name="connexion">Connexion</button>
        </div>
    </form>

</div>

<script src="./res/javascript/app.js"></script>

</body>
</html>