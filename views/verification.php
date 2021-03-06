<?php 
session_start();
$user = $_SESSION["user"]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>B&A Vérification</title>
</head>
<body>
<?php include("partials/header.php") ?>
    
    <div class="wrapper">
       <div class="window">
           <h2>Vérification de la commande</h2>
       </div>
       
       <div class="window">
            <h4>Commande</h4>

            <h4>Coordonnées</h4>
            <p><?= $user["lastname"] . " " .$user["firstname"]; ?></p> 
            <p><?= $user["adress"] ?></p> 
            <p><?= $user["telephone"] ?></p> 
            <p><?= $user["email"] ?></p>
       </div>

       <div class="window">
            <a href="">Valider</a>
            <a href="">Annuler</a>
        </div>
    </div>

    <?php include("partials/footer.php") ?>
</body>
</html>