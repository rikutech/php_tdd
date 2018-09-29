<?php
namespace App;

class Doller4
{
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        return new self($this->amount * $multiplier);
    }

    public function equals($other)
    {
        if(!$other instanceof static) {
            return false;
        }
        return $this->amount === $other->amount;
    }
}
