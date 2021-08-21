<?php

namespace abstracts\furnitureFactory\victorianFurniture;

use abstracts\furnitureFactory\interfaces\FurnitureFactory;
use abstracts\furnitureFactory\interfaces\Chair;
use abstracts\furnitureFactory\interfaces\CoffeeTable;
use abstracts\furnitureFactory\interfaces\Sofa;

class VictorianFurniture implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new VictorianChair();
    }

    public function createCoffeeTable(): CoffeeTable
    {
        return new VictorianCoffeeTable();
    }

    public function createSofa(): Sofa
    {
        return new VictorianSofa();
    }
}