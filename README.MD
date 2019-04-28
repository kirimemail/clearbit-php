# Clearbit PHP API Client

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Clearbit API Client. Currently supporting the Enrichment API, but the entire API is on the roadmap for implementation. The current implementation uses v2 endpoints.

## Install

Via Composer

``` bash
$ composer require kirimemail/clearbit-api
```

## Quick Start

This implementation supports using one or multiple api keys. If a single key is used, clients are generated using static functions, otherwise instance methods generate clients.

### Using a single key

All of the following examples assume the following step:

```php
use Kirimemail\clearbit\Clearbit;

Clearbit::setKey('token');
```



#### Calculates an associated risk score

```php
$enrichment = Clearbit::createRiskApi();
$enrichment->person([ 'email' => 'test@test.com', 'ip' => '127.0.0.1']);
```






## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
