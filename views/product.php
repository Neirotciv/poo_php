<?php 
include_once("../classes/Product.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Bob et Alice</title>
</head>
<body>
<?php include("partials/header.php") ?>
    
    <div class="wrapper">
        <div class="window">
            <div class="item">
                <img src="assets/images/bob-export.png" alt="picture of sponge bob">
                <p>Description du produit Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem amet ratione, laborum possimus esse ipsa debitis odio cumque in quibusdam quo? Minima perspiciatis labore quod quas eaque iure nostrum. Obcaecati?</p>
                <a href="order.php">Acheter</a>
                <a href="catalog.php">Retour</a>
            </div>
        </div>
    </div>

    <?php include("partials/footer.php") ?>
</body>
</html>