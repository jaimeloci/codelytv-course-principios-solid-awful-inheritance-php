<?php

declare(strict_types=1);

namespace AwfulInheritance;

class Coffee implements Beverage
{
    public function price():float
    {
        return 1.2;
    }
}