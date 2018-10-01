<?php
namespace App\Chapter9;

abstract class Money
{
    protected $amount;
    protected $currency;

    abstract public function times(int $amount): self;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function equals($other): bool
    {
        if(!$other instanceof static) {
            return false;
        }
        return $this->amount === $other->amount;
    }

    public static function doller(int $amount): Doller
    {
        return new Doller($amount, 'USD');
    }

    public static function franc(int $amount): Franc
    {
        return new Franc($amount, 'CHF');
    }
}
