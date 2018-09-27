<?php
namespace App;

class Doller3
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        return new self($this->amount * $multiplier);
    }

    public function equals(self $other)
    {
        return $this->amount == $other->amount;
    }
}
