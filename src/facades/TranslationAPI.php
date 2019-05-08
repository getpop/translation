<?php
namespace PoP\Translation\Facades;

use PoP\Translation\Contracts\TranslationAPIInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class TranslationAPI
{
    public static function getInstance(): TranslationAPIInterface
    {
        return ContainerBuilderFactory::getInstance()->get('\PoP\Translation\Contracts\TranslationAPI');
    }
}
