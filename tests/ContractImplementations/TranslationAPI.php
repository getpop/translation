<?php
declare(strict_types=1);
namespace PoP\Translation\ContractImplementations;

class TranslationAPI implements \PoP\Translation\TranslationAPIInterface
{
    public function __($text, $domain = 'default'): string
    {
        return $text;
    }
}
