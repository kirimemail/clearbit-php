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

#### Configuring endpoint behavior

By default, Clearbit transmits data to a webhook if data is not immediately available. You can configure an endpoint url to receive webhooks, or you can use the steaming API to wait for results.

```php
$enrichment = Clearbit::createEnrichmentApi();

// Webhook endpoint
$enrichment->setWebhookEndpoint('https://test.com/api/webhook');

// Streaming
$enrichment->enableStreaming();
```

#### Get combined (person and company) data

```php
$enrichment = Clearbit::createEnrichmentApi();
$enrichment->combined('test@test.com');
```

#### Get person data

```php
$enrichment = Clearbit::createEnrichmentApi();
$enrichment->person('test@test.com');
```

To subscribe to updates:

```php
$enrichment = Clearbit::createEnrichmentApi();
$enrichment->person('test@test.com', true);
```

#### Get company data

```php
$enrichment = Clearbit::createEnrichmentApi();
$enrichment->company('test.com');
```

#### Name To Domain

```php
$nameToDomain = Clearbit::createNameToDomain();
$nameToDomain->get('Segment');
```




## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
