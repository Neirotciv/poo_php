<?php 
require_once("models/ProductModel.php");
$products = ProductModel::getAllProducts();
?>
<!DOCTYPE html>
<html lang="en">
<?php include("partials/head.php") ?>
<body>
    <?php include("partials/header.php") ?>
    <div class="wrapper">
        <?php foreach($products as $product): ?>
            <div class="window">
                <div class="item">
                    <h4><?= $product->name ?></h4>
                    <img src="<?= $product->image ?>" alt="picture of sponge bob">
                    <a href="product">Voir</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php include("partials/footer.php") ?>
</body>
</html>