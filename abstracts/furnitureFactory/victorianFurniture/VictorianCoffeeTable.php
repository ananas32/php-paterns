<?php

namespace abstracts\furnitureFactory\victorianFurniture;

use abstracts\furnitureFactory\interfaces\CoffeeTable;

class VictorianCoffeeTable implements CoffeeTable
{
    public function hasLegs(): string
    {
        return 'victorian coffee table has more 5 legs';
    }

    public function maxHeight(): string
    {
        return 'victorian coffee table has 1000px height';
    }
}