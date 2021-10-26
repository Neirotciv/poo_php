<?php 
class Product {
    public $ref;
    public $image;
    public $prix;
    public $nom;
    public $description;

    public function __construct($ref, $image, $price, $name, $description) {
      $this->ref = $ref;
      $this->image = $image;
      $this->price = $price;
      $this->name = $name;
      $this->description = $description;
    }
}