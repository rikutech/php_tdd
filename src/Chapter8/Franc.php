<?php
namespace App\Chapter8;

class Franc extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Money
    {
        return new self($this->amount * $multiplier);
    }
}
