<?php
namespace PoP\Translation\Contracts;

interface TranslationAPIInterface
{
    public function __($text, $domain = 'default'): string;
}
