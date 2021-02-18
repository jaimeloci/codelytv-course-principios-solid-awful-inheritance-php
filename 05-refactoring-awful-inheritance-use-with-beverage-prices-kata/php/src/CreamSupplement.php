<?php

declare(strict_types=1);

namespace AwfulInheritance;

final class CreamSupplement implements BeverageSupplement
{
    public function price():float
    {
        return 0.15;
    }
}