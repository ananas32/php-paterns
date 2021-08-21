<?php

namespace abstracts\furnitureFactory\arDecoFurniture;

use abstracts\furnitureFactory\interfaces\FurnitureFactory;
use abstracts\furnitureFactory\interfaces\Chair;
use abstracts\furnitureFactory\interfaces\CoffeeTable;
use abstracts\furnitureFactory\interfaces\Sofa;

class ArDecoFurniture implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new ArDecoChair();
    }

    public function createCoffeeTable(): CoffeeTable
    {
        return new ArDecoCoffeeTable();
    }

    public function createSofa(): Sofa
    {
        return new ArdecoSofa();
    }
}