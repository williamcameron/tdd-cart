<?php

/**
 * Cart is the base shopping cart class of my TDD Cart
 *
 * @author William Cameron
 */
class Cart {
    public $lines = array();
    private $subtotal;
    
    public function subtotal(){
        return $this->subtotal;
    }
    public function addItem(Item $item){
        $this->lines[] = $item;
    }
}

class Item {
    public $name;
    public $price;
    public $quantity;
}