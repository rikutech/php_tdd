<?php
namespace App\Chapter9;

class Franc extends Money
{
    public function times(int $multiplier): Money
    {
        return Money::doller($this->amount * $multiplier);
    }
}
