<?php
    include dirname(__FILE__)."/../../system/autoload.php";
    
class cartTest extends PHPUnit_Framework_Testcase {

    public function testPhpUnitSanityCheck() {
        $this->assertTrue(true);
    }
    public function setUp(){
        $this->cart = new Cart();
    }
    public function test_NewCart_GivenNoParameters_ReturnsEmptyCart(){
        $cartLineCount = count($this->cart->lines);
        $this->assertEquals(0, $cartLineCount);
    }
    public function test_SubTotal_EmptyCart_ReturnsZero(){
        $cart = $this->cart;
        $this->assertEquals(0, $cart->subtotal());
    }
    public function test_AddItem_ValidItemAnyQuantity_BasketLinesEqualsOne(){
        $cart = $this->cart;
        $cart->addItem($this->getValidItem());
        $this->assertEquals(1, count($cart->lines));
    }
    
    public function test_ItemQuantity_ValidItemWithQuantity1_ReturnsQuantity1(){
        $cart = $this->cart;
        $cart->addItem($this->getValidItem());
        $this->assertEquals(1, $cart->itemQuantity());
    }
    public function test_ItemQuantity_ValidItemWithQuantity2_ReturnsQuantity2(){
        $cart = $this->cart;
        $cart->addItem($this->getValidItem(2));
        $this->assertEquals(2, $cart->itemQuantity());
    }
    
    
    private function getValidItem($qty=1){
        return new Item("Item Name", "4.99", $qty);
    }
}