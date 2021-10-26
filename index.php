<?php
session_start();

// Routing
$url = explode("?", $_SERVER["REQUEST_URI"])[0];
$data = explode("/", $url);
$page = $data[2];

switch($page) {
    case "":
        include("views/catalog.php");
        break;
    case "catalog":
        include("views/catalog.php");
        break;
    case "order":
        if (empty($data[3])) {
            $param = null;
        } else {
            $param = $data[3];
        }
        include("views/order.php");
        break;
    case "product":
        if (empty($data[3])) {
            $param = null;
        } else {
            $param = $data[3];
        }
        include("views/product.php");
        break;
    case "verification":
        include("views/verification.php");
        break;
    case "controller":
        if (empty($data[3])) {
            $controller = null;
        } else {
            $controller = $data[3];
        }
        include("controllers/order_controller.php");
        break;
    default:
        include("views/catalog.php");
        break;
}
