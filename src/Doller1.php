<?php
namespace App;

class Doller1
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): void
    {
        $this->amount = $this->amount * $multiplier;
    }
}
