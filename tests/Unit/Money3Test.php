<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Doller3;

class Money3Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMultiplication()
    {
        $five = new Doller3(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

    public function testEquality()
    {
        $five = new Doller3(5);
        $this->assertTrue($five->equals(new Doller3(5)));
        $this->assertFalse($five->equals(new Doller3(3)));
    }
}
