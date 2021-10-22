<?php 
include_once("../classes/Product.php");
// $bob = new Product("");
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
                <h4>Figurine de Bob</h4>
                <img src="assets/images/bob-export.png" alt="picture of sponge bob">
                <a href="product.php">Voir</a>
            </div>

            <div class="item">
                <h4>Figurine de Alice</h4>
                <img src="assets/images/alice.png" alt="picture of sponge bob">
                <a href="product.php">Voir</a>
            </div>
        </div>
    </div>

    <?php include("partials/footer.php") ?>
</body>
</html>