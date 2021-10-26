<?php
class Page {
    private $label;
    private $titre;
    private $contenu;
    
    function __construct($label, $titre, $contenu) {
        $this->label = $label;
        $this->titre = $titre;
        $this->contenu = $contenu;
    }

    public function generer() {
        $parser = new Parsedown();
        $contenu = "<h1>$this->titre</h1>";
    }
}