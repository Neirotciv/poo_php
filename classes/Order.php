<?php
class Order {
    public $id;
    private $status;
    private $timestamp;
    private $client;
    private $produit;

    public function __construct($client, $produit) {
        $this->id = uniqid("cmd_", true);
        $this->status = 0;

        $time = new DateTime();
        $this->timestamp = $time->getTimestamp();

        $this->client = $client;
        $this->produit = $produit;
    }

    public function getStatus() {
        return $this->status;
    }

    public function pay() {
        $this->status = 1;
    }

    public function cancel() {
        $this->status = -1;
    }
}

?>