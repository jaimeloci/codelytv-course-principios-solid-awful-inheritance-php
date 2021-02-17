<?php

declare(strict_types=1);

namespace AwfulInheritance;

final class HotChocolateWithCream extends HotChocolate
{
    public function price():float
    {
        return parent::price() + 0.15;
    }
}