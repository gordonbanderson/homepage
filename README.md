# Home and Landing Page

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


Additional content types for home page and landing page.  For now they are used to allow for a 
different template (example provided for SS4), but eventually with have more functionality.

## Install

Via Composer

``` bash
$ composer require suilven/homepage
```

## Usage

``` php
$skeleton = new Suilven\HomeLandingPage();
echo $skeleton->echoPhrase('Hello, League!');
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

If you discover any security related issues, please email gordon.b.anderson@gmail.com instead of using the issue tracker.

## Credits

- [Gordon Anderson][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/suilven/homepage.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/suilven/homepage/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/suilven/homepage.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/suilven/homepage.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/suilven/homepage.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/suilven/homepage
[link-travis]: https://travis-ci.org/suilven/homepage
[link-scrutinizer]: https://scrutinizer-ci.com/g/suilven/homepage/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/suilven/homepage
[link-downloads]: https://packagist.org/packages/suilven/homepage
[link-author]: https://github.com/gordonbanderson
[link-contributors]: ../../contributors
