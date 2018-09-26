<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Doller;

class MoneyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMultiplication()
    {
        $five = new Doller(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}
