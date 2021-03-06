<?php
namespace App;

class Doller2
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Doller2
    {
        return new self($this->amount * $multiplier);
    }
}
