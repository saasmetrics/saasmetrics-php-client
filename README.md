# SaasMetrics PHP Client

Simple PHP client for [SaasMetrics API](http://www.saasmetrics.co/docs/)

## Installation

```
$ composer require xotelia/saasmetrics-php-client
```

## Usage

```php
<?php

require __DIR__.'/vendor/autoload.php';

use SaasMetrics\SaasMetrics;

$apiKey = 'your api key';
$saasMetrics = new SaasMetrics($apiKey);
$saasMetrics->newMRR(150, new \DateTime())->increment();
```
