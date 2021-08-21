<?php

namespace abstracts\furnitureFactory;

use abstracts\furnitureFactory\interfaces\FurnitureFactory;

class Chair
{
    public function create(FurnitureFactory $factory): string
    {
        $chair = $factory->createChair();
        return $chair->hasLegs() . ' -> ' . $chair->sitOn();
    }
}