<?php
session_start();
require_once("../classes/Customer.php");
require_once("../classes/Product.php");
require_once("../classes/Command.php");
require_once("../classes/Stock.php");

// $stock = new Stock("product.csv");
// $stock->create(["PR1", "Bob", "Un super Bob", 99]);
// var_dump($stock);
// die();

// Vérification des saisies
if (
    empty($_POST["firstname"]) || empty($_POST["lastname"]) ||
    empty($_POST["adress"]) || empty($_POST["telephone"]) ||
    empty($_POST["email"]) || empty($_POST["product"])
) {
    $_SESSION["form_error"] = "Le formulaire n'est pas rempli correctement";
    header("location: ../views/order.php");
    die();
}

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$adress = $_POST["adress"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$product = $_POST["product"];

// Filtrage des saisies
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["form_error"] = "Le format d'email n'est pas valide";
    header("location: ../views/order.php");
    die();
}

if (!filter_var($telephone, FILTER_SANITIZE_NUMBER_INT)) {
    $_SESSION["form_error"] = "Le format du numéro de téléphone n'est pas valide";
    header("location: ../views/order.php");
    die();
}

// Création du client
$customer = new Customer($lastname, $fistname, $adress, $email, $telephone);
// Création de la commande
$command = new Command($customer, $product);

$_SESSION["user"] = [
    "lastname" => $lastname,
    "firstname" => $firstname,
    "adress" => $adress,
    "telephone" => $telephone,
    "email" => $email,
];

header("location: ../views/verification.php");
