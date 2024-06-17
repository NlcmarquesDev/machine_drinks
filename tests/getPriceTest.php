<?php

declare(strict_types=1);

namespace Tests;

use App\Entities\Drink;
use PHPUnit\Framework\TestCase;


class getPriceTest extends TestCase
{

    public function testPriceMustBeFloat()
    {
        $price  = new Drink('hola', 250, 15.4);

        $price->getPrice();

        $this->assertEquals(15.4, $price->getPrice());
    }
}
