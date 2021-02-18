<?php

declare(strict_types=1);

namespace AwfulInheritance;

class HotChocolateBase implements BeverageBase
{
    public function price():float
    {
        return 1.45;
    }
}