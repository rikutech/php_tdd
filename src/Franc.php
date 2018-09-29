<?php
namespace App;

class Franc
{
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new self($this->amount * $multiplier);
    }

    public function equals($other): bool
    {
        if(!$other instanceof static) {
            return false;
        }
        return $this->amount === $other->amount;
    }
}
