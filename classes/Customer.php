<?php
require_once("Order.php");

class Customer {
    public $lastname;
    public $firstname;
    public $adress;
    private $email;
    private $telephone;
    
    public function __construct($lastname, $firstname, $adress, $email, $telephone) {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->adress = $adress;
        $this->email = $email;
        $this->telephone = $telephone;
    }

    public function makeOrder($product) {
        $order = new Order($this, $product);
        return $order;
    }
}