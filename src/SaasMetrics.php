<?php

namespace SaasMetrics;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;
use DateTimeInterface;

class SaasMetrics
{
    const BASE_URL = 'http://api.saasmetrics.co/{version}/metrics/';
    const VERSION = 'v1';

    protected $client;
    protected $apiKey;

    /**
     * Construct the SaasMetrics client
     * The config only allows a 'handler' parameter to pass a custom handler
     *
     * @param string $apiKey required api key
     * @param array  $config config
     */
    public function __construct($apiKey, array $config = [])
    {
        if (isset($config['handler'])) {
            if ($config['handler'] instanceof ClientInterface) {
                $this->client = $config['handler'];
            } else {
                throw new \InvalidArgumentException('The handler should be an instance of "GuzzleHttp\ClientInterface".');
            }
        } else {
            $this->client = new GuzzleClient([
                'base_url' => [self::BASE_URL, ['version' => self::VERSION]],
            ]);
        }

        $this->apiKey = $apiKey;
    }

    public function bookings($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'bookings', $value, $date);
    }

    public function avgDealSize($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'avgDealSize', $value, $date);
    }

    public function avgMonthsPaidUpfront($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'avgMonthsPaidUpfront', $value, $date);
    }

    public function newMRR($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'newMRR', $value, $date);
    }

    public function expansionMRR($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'expansionMRR', $value, $date);
    }

    public function churnedMRR($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'churnedMRR', $value, $date);
    }

    public function visitors($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'visitors', $value, $date);
    }

    public function leads($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'leads', $value, $date);
    }

    public function trialsInProgress($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'trialsInProgress', $value, $date);
    }

    public function newCustomers($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'newCustomers', $value, $date);
    }

    public function salesReps($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'salesReps', $value, $date);
    }

    public function quotaPerSalesRep($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'quotaPerSalesRep', $value, $date);
    }

    public function billings($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'billings', $value, $date);
    }

    public function revenue($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'revenue', $value, $date);
    }

    public function cogs($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'cogs', $value, $date);
    }

    public function salesMarketingExpenses($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'salesMarketingExpenses', $value, $date);
    }

    public function researchDevelopmentExpenses($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'researchDevelopmentExpenses', $value, $date);
    }

    public function generalAdministrativeExpenses($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'generalAdministrativeExpenses', $value, $date);
    }

    public function endingCash($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'endingCash', $value, $date);
    }

    public function churnedCustomers($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'churnedCustomers', $value, $date);
    }

    public function customerEngagementScore($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'customerEngagementScore', $value, $date);
    }

    public function netPromoterScore($value, DateTimeInterface $date = null)
    {
        return new Metric($this->client, $this->apiKey, 'netPromoterScore', $value, $date);
    }
}

