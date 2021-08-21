<?php

namespace abstracts\furnitureFactory\interfaces;

interface Chair
{
    public function hasLegs(): string;

    public function sitOn(): string;
}
