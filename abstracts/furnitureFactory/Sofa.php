<?php

namespace abstracts\furnitureFactory;

use abstracts\furnitureFactory\interfaces\FurnitureFactory;

class Sofa extends Chair
{
    public function create(FurnitureFactory $factory): string
    {
        $chair = $factory->createSofa();
        return $chair->hasLegs() . ' -> ' . $chair->sitOn();
    }
}