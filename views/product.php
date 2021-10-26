<?php 
require_once("models/ProductModel.php");
$ref = $product = false;

if(!empty($param)) {
  $ref = htmlentities($param);
  $product = ProductModel::getProduct($ref);
}
var_dump($ref);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include("partials/head.php") ?>
</head>
<body>
<?php include("partials/header.php") ?>
    
    <div class="wrapper">
        <div class="window">
            <div class="item">
                <img src="assets/images/bob-export.png" alt="picture of sponge bob">
                <p>Description du produit Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem amet ratione, laborum possimus esse ipsa debitis odio cumque in quibusdam quo? Minima perspiciatis labore quod quas eaque iure nostrum. Obcaecati?</p>
                <a href="order">Acheter</a>
                <a href="catalog">Retour</a>
            </div>
        </div>
    </div>

    <?php include("partials/footer.php") ?>
</body>
</html>