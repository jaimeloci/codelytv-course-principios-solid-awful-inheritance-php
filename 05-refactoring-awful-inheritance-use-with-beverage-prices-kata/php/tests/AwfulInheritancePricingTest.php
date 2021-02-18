<?php

declare(strict_types=1);

namespace Tests;

use AwfulInheritance\Beverage;
use AwfulInheritance\BeverageBase;
use AwfulInheritance\CoffeeBase;
use AwfulInheritance\HotChocolateBase;
use AwfulInheritance\TeaBase;
use AwfulInheritance\BeverageSupplement;
use AwfulInheritance\CinnamonSupplement;
use AwfulInheritance\CreamSupplement;
use AwfulInheritance\MilkSupplement;
use PHPUnit\Framework\TestCase;

class AwfulInheritancePricingTest extends TestCase
{

    public function testCoffeePrice():void 
    {
        $base = new CoffeeBase();
        $supplements = array();
        $coffee = new Beverage( $base, $supplements );
        
        $this->assertEquals(1.20, $coffee->price());
    }

    public function testCoffeeWithMilkPrice():void 
    {
        $base = new CoffeeBase();
        $supplements = array(new MilkSupplement());
        $coffeeWithMilk = new Beverage( $base, $supplements );
        
        $this->assertEquals(1.30, $coffeeWithMilk->price());
    }
    
    public function testCoffeeWithMilkAndCreamPrice():void 
    {
        $base = new CoffeeBase();
        $supplements = array(new MilkSupplement(), new CreamSupplement());
        $coffeeWithMilkAndCream = new Beverage( $base, $supplements );
        
        $this->assertEquals(1.45, $coffeeWithMilkAndCream->price());
    }

    public function testCoffeeWithCinnamonPrice():void 
    {
        $base = new CoffeeBase();
        $supplements = array(new CinnamonSupplement());
        $coffeeWithCinnamon = new Beverage( $base, $supplements );
        
        $this->assertEquals(1.25, $coffeeWithCinnamon->price());
    }
    
    public function testTeaPrice():void 
    {
        $base = new TeaBase();
        $supplements = array();
        $tea = new Beverage( $base, $supplements );
        
        $this->assertEquals(1.50, $tea->price());
    }
    
    public function testTeaWithMilkPrice():void 
    {
        $base = new TeaBase();
        $supplements = array(new MilkSupplement());
        $TeaWithMilk = new Beverage( $base, $supplements );
        
        $this->assertEquals(1.60, $TeaWithMilk->price());
    }

    public function testTeaWithCinnamonPrice():void 
    {
        $base = new TeaBase();
        $supplements = array(new CinnamonSupplement());
        $teaWithCinnamon = new Beverage( $base, $supplements );
        
        $this->assertEquals(1.55, $teaWithCinnamon->price());
    }
    
    public function testHotChocolatePrice():void 
    {
        $base = new HotChocolateBase();
        $supplements = array();
        $hotChocolate = new Beverage( $base, $supplements );
        
        $this->assertEquals(1.45, $hotChocolate->price());
    }
    
    public function testHotChocolateWithCreamPrice():void 
    {
        $base = new HotChocolateBase();
        $supplements = array(new CreamSupplement());
        $hotChocolateWithCream = new Beverage( $base, $supplements );
        
        $this->assertEquals(1.60, $hotChocolateWithCream->price());
    }

    public function testHotChocolateWithCinnamonPrice():void 
    {
        $base = new HotChocolateBase();
        $supplements = array(new CinnamonSupplement());
        $hotChocolateWithCinnamon = new Beverage( $base, $supplements );
        
        $this->assertEquals(1.50, $hotChocolateWithCinnamon->price());
    }

}
