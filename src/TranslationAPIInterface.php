<?php
namespace PoP\Translation;

interface TranslationAPIInterface
{
    public function __($text, $domain = 'default'): string;
}
