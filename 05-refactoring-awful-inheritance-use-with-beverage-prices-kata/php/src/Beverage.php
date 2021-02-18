<?php

declare(strict_types=1);

namespace AwfulInheritance;

final class Beverage
{
    private BeverageBase $base;
    private $supplements = [];

    public function __construct(BeverageBase $base, $supplements = [])
    {
        $this->base = $base;
        $this->supplements = $supplements;
    }

    public function price():float
    {
        $total = $this->base->price();
        
        foreach ($this->supplements as $supplement) {
            $total += $supplement->price();
        }
        return $total;
    }
}