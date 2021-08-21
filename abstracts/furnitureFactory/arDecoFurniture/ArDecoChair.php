<?php

namespace abstracts\furnitureFactory\arDecoFurniture;

use abstracts\furnitureFactory\interfaces\Chair;

class ArDecoChair implements Chair
{
    public function hasLegs(): string
    {
        return 'ar deco chair has 4 legs';
    }

    public function sitOn(): string
    {
        return 'ar deco chair you can sitOn';
    }
}