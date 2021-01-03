# PoP Translation

[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Software License][ico-license]](LICENSE.md)

<!--
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Total Downloads][ico-downloads]][link-downloads]
-->

Contracts to implement translation for PoP components

## Install

Via Composer

``` bash
composer require getpop/translation
```

## Development

The source code is hosted on the [PoP monorepo](https://github.com/leoloso/PoP), under [`Engine/packages/translation`](https://github.com/leoloso/PoP/tree/master/layers/Engine/packages/translation).

## Usage

Initialize the component:

``` php
\PoP\Root\ComponentLoader::initializeComponents([
    \PoP\Translation\Component::class,
]);
```

Use it:

```php
use PoP\Translation\Facades\TranslationAPIFacade;

// Get an instance of the service
$translationapi = TranslationAPI::getInstance();

// Translate text
$translatedText = $translationapi->__($text, $domain);
```

## PHP versions

Requirements:

- PHP 7.4+ for development
- PHP 7.1+ for production

### Supported PHP features

Same as the [Supported PHP features for `getpop/root`](https://github.com/getpop/root/#supported-php-features)

### Downgrading code to PHP 7.1

Via [Rector](https://github.com/rectorphp/rector) (dry-run mode):

```bash
composer preview-code-downgrade
```

## Standards

[PSR-1](https://www.php-fig.org/psr/psr-1), [PSR-4](https://www.php-fig.org/psr/psr-4) and [PSR-12](https://www.php-fig.org/psr/psr-12).

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
composer test
```

## Static Analysis

Execute [phpstan](https://github.com/phpstan/phpstan) with level 8:

``` bash
composer analyse
```

To run checks for level 0 (or any level from 0 to 8):

``` bash
./vendor/bin/phpstan analyse -l 0 src tests
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email leo@getpop.org instead of using the issue tracker.

## Credits

- [Leonardo Losoviz][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

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
[link-contributors]: ../../../../../../contributors
[link-author]: https://github.com/leoloso
