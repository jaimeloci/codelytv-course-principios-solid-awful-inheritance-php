<?php

declare(strict_types=1);

namespace AwfulInheritance;

final class CinnamonSupplement implements BeverageSupplement
{
    public function price():float
    {
        return 0.05;
    }
}