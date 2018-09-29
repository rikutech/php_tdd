<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Chapter6\Doller;
use App\Chapter6\Franc;

class Chapter6Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMultiplication()
    {
        $five = new Doller(5);
        $this->assertEquals(new Doller(10), $five->times(2));
        $this->assertEquals(new Doller(15), $five->times(3));
    }

    public function testFrancMultiplication()
    {
        $five = new Franc(5);
        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $doller = new Doller(5);
        $franc = new Franc(5);
        $this->assertTrue($doller->equals(new Doller(5)));
        $this->assertFalse($doller->equals(new Doller(3)));
        $this->assertTrue($franc->equals(new Franc(5)));
        $this->assertFalse($franc->equals(new Franc(3)));
    }
}
