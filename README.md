# A Package to work with Map Providers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abbas-bz/maps-api.svg?style=flat-square)](https://packagist.org/packages/abbas-bz/maps-api)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/abbas-bz/maps-api/run-tests?label=tests)](https://github.com/abbas-bz/maps-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/abbas-bz/maps-api/Check%20&%20fix%20styling?label=code%20style)](https://github.com/abbas-bz/maps-api/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/abbas-bz/maps-api.svg?style=flat-square)](https://packagist.org/packages/abbas-bz/maps-api)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/maps-api.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/maps-api)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require abbas-bz/maps-api
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="maps-api-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="maps-api-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="maps-api-views"
```

## Usage

```php
$mapsApi = new Abbas-bz\MapsApi();
echo $mapsApi->echoPhrase('Hello, Abbas-bz!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Abbas Bakhshizadeh](https://github.com/Abbas-bz)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
