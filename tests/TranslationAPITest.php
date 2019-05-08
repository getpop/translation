<?php
declare(strict_types=1);
namespace PoP\Translation;

use PoP\Root\Container\ContainerBuilderFactory;
use PoP\Translation\ContractImplementations\TranslationAPI;

class TranslationAPITestCase extends \PHPUnit\Framework\TestCase
{
    public function __construct()
    {
        parent::__construct();
        $containerBuilder = ContainerBuilderFactory::getInstance();
        $containerBuilder
            ->register('\PoP\Translation\Contracts\TranslationAPI', TranslationAPI::class);
    }
    /**
     * Test that applyFilter returns $value
     */
    public function testTranslate(): void
    {
        $translationapi = \PoP\Translation\Facades\TranslationAPI::getInstance();
    }
}
