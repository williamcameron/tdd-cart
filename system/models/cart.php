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
        $this->subtotal = 0;
        foreach($this->lines as $line){
            $this->subtotal += $line->quantity * $line->price;
        }
        
        return $this->subtotal;
    }
    public function addItem(Item $item){
        $this->lines[] = $item;
    }
    public function itemQuantity(){
        $qty = 0;
        foreach($this->lines as $line){
            $qty += $line->quantity;
        }
        return $qty;
    }
}
