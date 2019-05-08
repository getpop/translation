# PoP Translation

<!--
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]
-->

Translation API for PoP components

## Install

Via Composer

``` bash
$ composer require getpop/translation
```

## Usage

```php
use PoP\Translation\Facades\TranslationAPI;

// Get an instance of the service
$translationapi = TranslationAPI::getInstance();

// Translate text
$translationapi->__($text, $domain);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email leo@getpop.org instead of using the issue tracker.

## Credits

- [Leonardo Losoviz][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

<!--
[ico-version]: https://img.shields.io/packagist/v/getpop/translation.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/getpop/translation/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/getpop/translation.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/getpop/translation.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/getpop/translation.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/getpop/translation
[link-travis]: https://travis-ci.org/getpop/translation
[link-scrutinizer]: https://scrutinizer-ci.com/g/getpop/translation/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/getpop/translation
[link-downloads]: https://packagist.org/packages/getpop/translation
[link-contributors]: ../../contributors
-->

[link-author]: https://github.com/leoloso
