<?php

namespace abstracts\furnitureFactory\arDecoFurniture;

use abstracts\furnitureFactory\interfaces\CoffeeTable;

class ArDecoCoffeeTable implements CoffeeTable
{
    public function hasLegs(): string
    {
        return 'ar deco chair has 3 legs';
    }

    public function maxHeight(): string
    {
        return 'ar deco coffee table has 1em';
    }
}