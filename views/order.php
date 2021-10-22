<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>B&A Commande</title>
</head>
<body>
<?php include("partials/header.php") ?>

    <div class="wrapper">
        <div class="window">
            <h3>Détails du produit</h3>
            <p>blablalba produc item</p>

            <h3>Données personnelles pour la livraison</h3>
            <form id="livraison-form" action="../controllers/order_controller.php" method="POST">
                <input type="hidden" name="product" value="bob">
                <label for="">Nom</label>
                <input type="text" name="lastname">
                <label for="">Prénom</label>
                <input type="text"name="firstname">
                <label for="">Adresse</label>
                <input type="text" name="adress">
                <label for="">Téléphone</label>
                <input type="text" name="telephone">
                <label for="">Email</label>
                <input type="text" name="email">
                <input type="submit" value="Valider">
            </form>
        </div>
        
        <?php
            if (isset($_SESSION["form_error"])): ?>
                <div class="window alert">
                    <p><?= $_SESSION["form_error"] ?></p>
                </div>
            <?php
            session_destroy();
            endif;
        ?>
    </div>
    
    <?php include("partials/footer.php") ?>
</body>
</html>