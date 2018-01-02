# laravel-easy-sms

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jessynt/laravel-easy-sms.svg?style=flat-square)](https://packagist.org/packages/jessynt/laravel-easy-sms)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Total Downloads](https://img.shields.io/packagist/dt/jessynt/laravel-easy-sms.svg?style=flat-square)](https://packagist.org/packages/jessynt/laravel-easy-sms)

A [EasySMS](https://github.com/overtrue/easy-sms) bridge for Laravel


## Installation

Require this package with composer using the following command:

```bash
composer require jessynt/laravel-easy-sms
```

Add the service provider to the `providers` array in `config/app.php`

```php
Jessynt\LaravelEasySM\ServiceProvider::class,
```

Publish configuration in Laravel 5

```bash
php artisan vendor:publish --provider="Jessynt\LaravelEasySM\ServiceProvider"
```

## Usage

```php
EasySMS::send($to, $message, $gateways = array())
// ...
```

## License

[MIT](LICENSE)

Copyright (c) 2017-2018 Jessynt

