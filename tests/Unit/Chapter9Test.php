<?php
namespace Tests\Unit;

use App\Chapter9\Money;
use PHPUnit\Framework\TestCase;

class Chapter9Test extends TestCase
{
    public function testCurrency()
    {
        $this->assertEquals('USD', Money::doller(1)->currency());
        $this->assertEquals('CHF', Money::franc(1)->currency());
    }
}