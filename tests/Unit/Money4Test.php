<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Doller4;

class Money4Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMultiplication()
    {
        $five = new Doller4(5);
        $this->assertEquals(new Doller4(10), $five->times(2));
        $this->assertEquals(new Doller4(15), $five->times(3));
    }

    public function testEquality()
    {
        $five = new Doller4(5);
        $this->assertTrue($five->equals(new Doller4(5)));
        $this->assertFalse($five->equals("5"));
        $this->assertFalse($five->equals(new Doller4(3)));
    }
}
