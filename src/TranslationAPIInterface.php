<?php

declare(strict_types=1);

namespace PoP\Translation;

interface TranslationAPIInterface
{
    public function __($text, $domain = 'default'): string;
}
