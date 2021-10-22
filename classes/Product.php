<?php 
class Product {
  
  public $ref;
  public $image;
  public $prix;
  public $nom;
  public $description;

  public function __construct($ref, $image, $prix, $nom, $description) {
    $this->ref = $ref;
    $this->image = $image;
    $this->prix = $prix;
    $this->nom = $nom;
    $this->description = $description;
  }

}