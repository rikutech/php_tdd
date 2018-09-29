<?php
namespace App;

class Doller3
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Doller3
    {
        return new self($this->amount * $multiplier);
    }

    public function equals(self $other): bool
    {
        return $this->amount === $other->amount;
    }
}
