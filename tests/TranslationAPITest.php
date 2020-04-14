<?php
declare(strict_types=1);

namespace PoP\Translation;

use PoP\Root\Container\ContainerBuilderFactory;
use PoP\Translation\ContractImplementations\TranslationAPI;
use PoP\Translation\Facades\TranslationAPIFacade;

class TranslationAPITest extends \PHPUnit\Framework\TestCase
{
    public function __construct()
    {
        parent::__construct();
        $containerBuilder = ContainerBuilderFactory::getInstance();
        $containerBuilder
            ->register('translation_api', TranslationAPI::class);
    }
    /**
     * Test that applyFilter returns $value
     */
    public function testTranslate(): void
    {
        $translationapi = TranslationAPIFacade::getInstance();
    }
}
