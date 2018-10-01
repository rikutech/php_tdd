<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Chapter8\Money;

class Chapter8Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMultiplication()
    {
        $five = Money::doller(5);
        $this->assertEquals(Money::doller(10), $five->times(2));
        $this->assertEquals(Money::doller(15), $five->times(3));
    }

    public function testFrancMultiplication()
    {
        $five = Money::franc(5);
        $this->assertEquals(Money::franc(10), $five->times(2));
        $this->assertEquals(Money::franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $doller = Money::doller(5);
        $franc = Money::franc(5);
        $this->assertTrue($doller->equals(Money::doller(5)));
        $this->assertFalse($doller->equals(Money::doller(3)));
        $this->assertTrue($franc->equals(Money::franc(5)));
        $this->assertFalse($franc->equals(Money::franc(3)));
    }
}
