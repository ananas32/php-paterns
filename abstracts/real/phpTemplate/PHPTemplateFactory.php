<?php

namespace abstracts\real\phpTemplate;

use abstracts\real\interfaces\TemplateFactory;
use abstracts\real\interfaces\TitleTemplate;
use abstracts\real\interfaces\PageTemplate;
use abstracts\real\interfaces\TemplateRenderer;

/**
 * А эта Конкретная Фабрика создает шаблоны PHPTemplate.
 */
class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}