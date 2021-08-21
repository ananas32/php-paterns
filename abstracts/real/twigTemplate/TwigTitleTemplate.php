<?php

namespace abstracts\real\twigTemplate;

use abstracts\real\interfaces\TitleTemplate;

/**
 * Этот Конкретный Продукт предоставляет шаблоны заголовков страниц Twig.
 */
class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
//        return "<h1>{{ title }}</h1>";
    }
}