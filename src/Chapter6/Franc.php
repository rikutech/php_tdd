<?php
namespace App\Chapter6;

class Franc extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new self($this->amount * $multiplier);
    }
}
