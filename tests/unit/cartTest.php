<?php
    include dirname(__FILE__)."/../../system/cart.php";
    
class cartTest extends PHPUnit_Framework_Testcase {

    public function testPhpUnitSanityCheck() {
        $this->assertTrue(true);
    }
    
    public function test_NewCart_GivenNoParameters_ReturnsEmptyCart(){
        $cart = new Cart();
        $this->assertEquals(0, count($cart->lines));
    }
}