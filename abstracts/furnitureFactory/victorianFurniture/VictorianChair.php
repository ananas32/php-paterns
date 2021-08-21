<?php

namespace abstracts\furnitureFactory\victorianFurniture;

use abstracts\furnitureFactory\interfaces\Chair;

class VictorianChair implements Chair
{
    public function hasLegs(): string
    {
        return 'Victorian hair has not a legs';
    }

    public function sitOn(): string
    {
        return 'victorian chair. You can sit on this chair';
    }
}