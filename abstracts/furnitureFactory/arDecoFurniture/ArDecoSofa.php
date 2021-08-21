<?php

namespace abstracts\furnitureFactory\arDecoFurniture;

use abstracts\furnitureFactory\interfaces\Sofa;

class ArDecoSofa implements Sofa
{
    public function hasLegs(): string
    {
        return 'ar deco sofa has 6 legs';
    }

    public function sitOn(): string
    {
        return 'ar deco sofa you can sit on';
    }
}