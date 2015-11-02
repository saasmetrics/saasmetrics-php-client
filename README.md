# SaasMetrics PHP Client

<!--[![Build Status](https://travis-ci.org/Akh0/saasmetrics-php-client.svg)](https://travis-ci.org/Akh0/saasmetrics-php-client) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Akh0/saasmetrics-php-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Akh0/saasmetrics-php-client/?branch=master)-->
[![Build Status](https://travis-ci.org/Xotelia/saasmetrics-php-client.svg)](https://travis-ci.org/Xotelia/saasmetrics-php-client) [![Latest Stable Version](https://poser.pugx.org/xotelia/saasmetrics-php-client/v/stable)](https://packagist.org/packages/xotelia/saasmetrics-php-client) [![Total Downloads](https://poser.pugx.org/xotelia/saasmetrics-php-client/downloads)](https://packagist.org/packages/xotelia/saasmetrics-php-client) [![License](https://poser.pugx.org/xotelia/saasmetrics-php-client/license)](https://packagist.org/packages/xotelia/saasmetrics-php-client) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Xotelia/saasmetrics-php-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Xotelia/saasmetrics-php-client/?branch=master)

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
$saasMetrics->newMRR(150)->increment();
```
