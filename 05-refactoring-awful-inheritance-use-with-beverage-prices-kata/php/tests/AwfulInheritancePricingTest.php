<?php

declare(strict_types=1);

namespace Tests;

use AwfulInheritance\Beverage;
use AwfulInheritance\Coffee;
use AwfulInheritance\CoffeeWithMilk;
use AwfulInheritance\CoffeeWithMilkAndCream;
use AwfulInheritance\HotChocolate;
use AwfulInheritance\HotChocolateWithCream;
use AwfulInheritance\Tea;
use AwfulInheritance\TeaWithMilk;
use PHPUnit\Framework\TestCase;

class AwfulInheritancePricingTest extends TestCase
{

    public function testCoffeePrice():void 
    {
        $beverage = new Coffee();
        
        $this->assertEquals(1.20, $beverage->price());
    }
    
    public function testCoffeeWithMilkPrice():void 
    {
        $beverage = new CoffeeWithMilk();
        
        $this->assertEquals(1.30, $beverage->price());
    }

    public function testCoffeeWithMilkAndCreamPrice():void 
    {
        $beverage = new CoffeeWithMilkAndCream();
        
        $this->assertEquals(1.45, $beverage->price());
    }

    public function testTeaPrice():void 
    {
        $beverage = new Tea();
        
        $this->assertEquals(1.50, $beverage->price());
    }

    public function testTeaWithMilkPrice():void 
    {
        $beverage = new TeaWithMilk();
        
        $this->assertEquals(1.60, $beverage->price());
    }

    public function testHotChocolatePrice():void 
    {
        $beverage = new HotChocolate();
        
        $this->assertEquals(1.45, $beverage->price());
    }
    
    public function testHotChocolateWithCreamPrice():void 
    {
        $beverage = new HotChocolateWithCream();
        
        $this->assertEquals(1.60, $beverage->price());
    }

}
