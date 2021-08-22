<?php

namespace bridge;

include '../autoload.php';

/**
 * Клиентский код имеет дело только с объектами Абстракции.
 */
function clientCode(Page $page)
{
    // ...

    echo $page->view();

    // ...
}

/**
 * Клиентский код может выполняться с любой предварительно сконфигурированной
 * комбинацией Абстракция+Реализация.
 */
$HTMLRenderer = new HTMLRenderer();
$JSONRenderer = new JsonRenderer();

$page = new SimplePage($HTMLRenderer, "Home", "Welcome to our website!");
echo "HTML view of a simple content page:<br>";
clientCode($page);
echo "<br><br>";

/**
 * При необходимости Абстракция может заменить связанную Реализацию во время
 * выполнения.
 */
$page->changeRenderer($JSONRenderer);
echo "JSON view of a simple content page, rendered with the same client code:<br>";
clientCode($page);
echo "<br><br>";


$product = new Product("123", "Star Wars, episode1",
    "A long time ago in a galaxy far, far away...",
    "/images/star-wars.jpeg", 39.95);

$page = new ProductPage($HTMLRenderer, $product);
echo "HTML view of a product page, same client code:<br>";
clientCode($page);
echo "<br><br>";

$page->changeRenderer($JSONRenderer);
echo "JSON view of a simple content page, with the same client code:<br>";
clientCode($page);