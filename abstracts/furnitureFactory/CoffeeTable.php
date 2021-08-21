<?php

namespace abstracts\furnitureFactory;

use abstracts\furnitureFactory\interfaces\FurnitureFactory;

class CoffeeTable
{
    public function create(FurnitureFactory $factory): string
    {
        $chair = $factory->createCoffeeTable();
        return $chair->hasLegs() . ' -> ' . $chair->maxHeight();
    }
}