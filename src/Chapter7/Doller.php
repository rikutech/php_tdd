<?php
namespace App\Chapter7;

class Doller extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): self
    {
        return new self($this->amount * $multiplier);
    }

}
