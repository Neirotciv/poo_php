<?php
require_once("classes/Customer.php");
require_once("classes/Product.php");
require_once("classes/Order.php");
require_once("classes/StockFile.php");

if(strpos($_SERVER['HTTP_REFERER'], "http://localhost/ecomerce/order")) {
    $url = $_SERVER['HTTP_REFERER'];
} else {
    $url = "http://localhost/ecomerce/order";
}

// Vérification des saisies
if (
    empty($_POST["firstname"]) || empty($_POST["lastname"]) ||
    empty($_POST["adress"]) || empty($_POST["telephone"]) ||
    empty($_POST["email"]) || empty($_POST["product"])
) {
    $_SESSION["form_error"] = "Le formulaire n'est pas rempli correctement";
    header("location: " . $url);
    die();
}

$firstname = htmlentities($_POST["firstname"]);
$lastname = htmlentities($_POST["lastname"]);
$adress = htmlentities($_POST["adress"]);
$email = htmlentities($_POST["email"]);
$telephone = htmlentities($_POST["telephone"]);
$product = htmlentities($_POST["product"]);

// Filtrage des saisies utilisateur
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["form_error"] = "Le format d'email n'est pas valide";
    header("location: " . $url);
    die();
}

if (!filter_var($telephone, FILTER_SANITIZE_NUMBER_INT)) {
    $_SESSION["form_error"] = "Le format du numéro de téléphone n'est pas valide";
    header("location: " . $url);
    die();
}

// Création du client
$customer = new Customer($lastname, $fistname, $adress, $email, $telephone);
// Création de la commande
$order = new Order($customer, $product);

$_SESSION["user"] = [
    "lastname" => $lastname,
    "firstname" => $firstname,
    "adress" => $adress,
    "telephone" => $telephone,
    "email" => $email,
];

header("location: /ecomerce/index.php");
