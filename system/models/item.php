<?php
	class Item {
    	public $name;
    	public $price;
    	public $quantity;
    	
    	public function __construct($name, $price, $quantity){
	        $this->name = $name;
        	$this->price = $price;
        	$this->quantity = $quantity;
    	}
	}