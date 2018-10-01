<?php
namespace App\Chapter8;

abstract class Money
{
    protected $amount;

    abstract public function times(int $amount);

    public function equals($other): bool
    {
        if(!$other instanceof static) {
            return false;
        }
        return $this->amount === $other->amount;
    }

    public static function doller(int $amount): Doller
    {
        return new Doller($amount);
    }

    public static function franc(int $amount): Franc
    {
        return new Franc($amount);
    }
}
