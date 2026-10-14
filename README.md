# Paquete de envío para Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor_slug/laravel-shipping-cost.svg?style=flat-square)](https://packagist.org/packages/:vendor_slug/laravel-shipping-cost)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/:vendor_slug/laravel-shipping-cost/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/:vendor_slug/laravel-shipping-cost/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/:vendor_slug/laravel-shipping-cost/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/:vendor_slug/laravel-shipping-cost/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/:vendor_slug/laravel-shipping-cost.svg?style=flat-square)](https://packagist.org/packages/:vendor_slug/laravel-shipping-cost)

Este paquete permite calcular y aplicar los costos de envío en una tienda en línea. Ofrece diferentes opciones de tarifas de envío, como por peso, por cantidad y por rango de cantidad. Además, permite agregar y editar los métodos de envío disponibles en la tienda.

## Installation

Puede instalar este paquete mediante Composer:

```bash
composer require edwinpeligro85/laravel-shipping-cost
```

A continuación, ejecute las migraciones para crear las tablas necesarias:

```bash
php artisan vendor:publish --tag="laravel-shipping-cost-migrations"
php artisan migrate
```

Puede publicar el archivo de configuración con:

```bash
php artisan vendor:publish --tag="laravel-shipping-cost-config"
```

Este es el contenido del archivo de configuración publicado:

```php
return [
];
```



## Uso

```php
$variable = new VendorName\Skeleton();
echo $variable->echoPhrase('Hello, VendorName!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [:author_name](https://github.com/:author_username)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
