<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Doller1;

class Money1Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMultiplication()
    {
        $five = new Doller1(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}
