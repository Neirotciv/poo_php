<?php
require_once("../classes/Order/php");
require_once("../classes/StockFile.php");
require_once("../classes/Product.php");
require_once("../classes/Customer.php");

class OrderModel {
    public static function createOrder($commmand, $customer) {
        $stock = new StockFile("order.csv");
        $array = OrderModel::arrayFromOrder($stock);
        $data = $stock->create($array);
    }

    public static function cancelOrder($id) {
        $index = OrderModel::getOrderIndexById($id);
        if($index === false) {
            return false;
        }
        $stock = new StockFile("order.csv");
        $order = OrderModel::orderFromArray($stock->readRow($index));
        $order->cancel();
        $stock->update($index, OrderModel::arrayFromOrder($order));
    }

    public static function payOrder($id) {
        $index = OrderModel::getOrderIndexById($id);
        if($index === false) {
          return false;
        }
    
        $stock = new StockFile("order.csv");
        $order = OrderModel::orderFromArray($stock->readRow($index));
        $order->pay();
        $stock->update($index, OrderModel::arrayFromOrder($order));
      }


    public static function getOrder($id) {
        $index = OrderModel::getOrderIndexById($id);
        if($index === false) {
          return false;
        }
    
        $stock = new StockFile("order.csv");
        $row = $stock->readRow($index);
        return OrderModel::orderFromArray($row);
      }

    private static function getOrderIndexById($id) {
        $stock = new StockFile("order.csv");
        $data = $stock_file->readAll();
        for($i = 0; $i < count($data); $i++) {
          if($data[$i][0] === $id ) {
            return $i;
          }
        }
        return false;
      }

    private static function orderFromArray($array) {
        $customer = new Customer($array[3], $array[4], $array[5], $array[6], $array[7]);
        $product = new Product($array[8], $array[11], $array[9], $array[12], $array[10]);
        $order = $customer->makerOrder($product);
        $order->id = $array[0];
        $order->timestamp = $array[2];
        return $order;
      }

    private static function arrayFromOrder($order) {
        $customer_array = array_values(get_object_vars($order->customer));
        unset($order->customer);

        $product_array = array_values(get_object_vars($order->product));
        unset($order->product);

        $order_array = array_values(get_object_vars($order));
        $array = array_merge($order_array, array_merge($customer_array, $product_array));

        return $array;
    }
}