<?php
require_once("classes/Customer.php");
require_once("classes/StockFile.php");

class CustomerModel {
    public static function createCustomer($customer) {
        $customer_file = new Stockfile("customer.csv");
        $array_customer = (array) $customer;
        var_dump($array_customer);
        $customer_file->create($array_customer);
    }
}