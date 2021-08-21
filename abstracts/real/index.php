<?php

namespace abstracts\real;


use abstracts\real\phpTemplate\PHPTemplateFactory;
use abstracts\real\twigTemplate\TwigTemplateFactory;
require_once '../functions.php';
require_once '../../autoload.php';

/**
 * Теперь в других частях приложения клиентский код может принимать фабричные
 * объекты любого типа.
 */
$page = new Page('Sample page', 'This it the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());


// Можете убрать комментарии, если у вас установлен Twig.
$page = new Page('Sample page twig', 'This it the twig body.');
 echo "<br>Testing rendering with the Twig factory:\n"; echo $page->render(new TwigTemplateFactory());