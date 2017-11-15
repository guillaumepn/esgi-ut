<?php

class Exchange
{
    private $receiver;
    private $product;
    private $owner;
    private $debut;
    private $fin;
    private $sender;
    private $db;

    function __construct($receiver, $product, $owner, $debut, $fin, $sender, $db) {
        $this->receiver = $receiver;
        $this->product = $product;
        $this->owner = $owner;
        $this->debut = $debut;
        $this->fin = $fin;
        $this->sender = $sender;
        $this->db = $db;
    }

}
