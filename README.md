# Lunar GoCardless

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require ibrostudio/lunar-gocardless
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="lunar-gocardless-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lunar-gocardless-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="lunar-gocardless-views"
```

## Usage

```php
$goCardless = new IBroStudio\GoCardless();
echo $goCardless->echoPhrase('Hello, IBroStudio!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
