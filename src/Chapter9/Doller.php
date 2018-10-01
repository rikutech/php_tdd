<?php
namespace App\Chapter9;

class Doller extends Money
{
    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }

}
