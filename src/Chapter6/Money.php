<?php
namespace App\Chapter6;

class Money
{
    protected $amount;


    public function equals($other): bool
    {
        if(!$other instanceof static) {
            return false;
        }
        return $this->amount === $other->amount;
    }
}
