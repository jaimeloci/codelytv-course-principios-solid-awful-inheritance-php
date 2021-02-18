<?php

declare(strict_types=1);

namespace AwfulInheritance;

class TeaBase implements BeverageBase
{
    public function price():float
    {
        return 1.5;
    }
}