<?php

namespace abstracts\furnitureFactory\victorianFurniture;

use abstracts\furnitureFactory\interfaces\Sofa;

class VictorianSofa implements Sofa
{
    public function hasLegs(): string
    {
        return 'victorian sofa has 7 legs';
    }

    public function sitOn(): string
    {
        return 'victorian sofa. You can sit on bottle';
    }
}
