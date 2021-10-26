<?php
require_once("classes/StockFile.php");
require_once("classes/Product.php");

class ProductModel {
    public static function getProduct($ref) {
        $all = ProductModel::getAllProducts();
        foreach($all as $product) {
            if ($ref === $product->ref) {
                return $product;
            }
        }
        return false;
    }

    public static function getAllProducts() {
        $products = [];
        $stock = new StockFile("product.csv");
        
        $data = $stock->readAll();

        foreach($data as $row) {
            array_push($products, new Product($row[0], $row[1], $row[2], $row[3], $row[4]));
        }

        return $products;
    }
}