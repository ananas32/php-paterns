<?php

namespace abstracts\furnitureFactory;


use abstracts\furnitureFactory\arDecoFurniture\ArDecoFurniture;
use abstracts\furnitureFactory\victorianFurniture\VictorianFurniture;

require_once '../../autoload.php';
require_once '../functions.php';

$furniture = new Chair();

echo "Testing create chair of ar deco factory: <br>";
echo $furniture->create(new ArDecoFurniture());

$furniture = new Sofa();
echo "<br>Testing create sofa of ar deco factory: <br>";
echo $furniture->create(new ArDecoFurniture());

$furniture = new CoffeeTable();
echo "<br>Testing create coffee table of ar deco factory: <br>";
echo $furniture->create(new ArDecoFurniture());

$furniture = new Chair();
echo "<br><br>Testing create chair of victorian factory: <br>";
echo $furniture->create(new VictorianFurniture());

$furniture = new Sofa();
echo "<br>Testing create sofa of victorian factory: <br>";
echo $furniture->create(new VictorianFurniture());

$furniture = new CoffeeTable();
echo "<br>Testing create coffee table of ar deco victorian factory: <br>";
echo $furniture->create(new VictorianFurniture());