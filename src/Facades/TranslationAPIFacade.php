<?php
namespace PoP\Translation\Facades;

use PoP\Translation\Contracts\TranslationAPIInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class TranslationAPIFacade
{
    public static function getInstance(): TranslationAPIInterface
    {
        return ContainerBuilderFactory::getInstance()->get('translation_api');
    }
}