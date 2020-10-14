<?php
declare(strict_types=1);

namespace PoP\Translation;

use PoP\Translation\TranslationAPIInterface;
use PoP\Root\Container\ContainerBuilderFactory;
use PoP\Translation\Facades\TranslationAPIFacade;
use PoP\Translation\ContractImplementations\TranslationAPI;

class TranslationAPITest extends \PHPUnit\Framework\TestCase
{
    public function __construct()
    {
        parent::__construct();
        $containerBuilder = ContainerBuilderFactory::getInstance();
        $containerBuilder
            ->register(TranslationAPIInterface::class, TranslationAPI::class);
    }
    /**
     * Test that applyFilter returns $value
     */
    public function testTranslate(): void
    {
        $translationapi = TranslationAPIFacade::getInstance();
    }
}
