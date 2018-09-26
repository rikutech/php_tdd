<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Doller2;

class Money2Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMultiplication()
    {
        $five = new Doller2(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }
}
