<?php

declare(strict_types=1);

namespace AwfulInheritance;

final class TeaWithMilk extends Tea
{
    public function price():float
    {
        return parent::price() + 0.10;
    }
}