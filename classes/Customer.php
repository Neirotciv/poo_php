<?php

class Customer {
    private $id;
    private $pseudo;
    public $nom;
    public $prenom;
    public $adresse;
    private $email;
    private $telephone;
    
    public function __construct($nom, $prenom, $adresse, $email, $telephone) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->email = $email;
        $this->telephone = $telephone;
    }

    public function commander($produit) {
        echo "Commande du produit " . $produit->nom . "\n";
        $command = new Command($this, $produit);
        return $command;
    }
}

?>