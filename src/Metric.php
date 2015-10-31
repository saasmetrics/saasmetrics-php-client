<?php

namespace SaasMetrics;

use DateTime;
use GuzzleHttp\ClientInterface;

class Metric
{
    protected $client;
    protected $apiKey;
    protected $metric;
    protected $value;
    protected $date;

    public function __construct(ClientInterface $client, $apiKey, $metric, $value, DateTime $date)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
        $this->metric = $metric;
        $this->value = $value;
        $this->date = $date;
    }

    /**
     * Set the metric
     *
     * @return array
     */
    public function set()
    {
        return $this->postRequest('set');
    }

    /**
     * Increment the metric
     *
     * @return array
     */
    public function increment()
    {
        return $this->postRequest('increment');
    }

    /**
     * Shortcut to make a POST request
     *
     * @return array
     */
    protected function postRequest($path)
    {
        $request = $this->client->createRequest('POST', $path, [
            'json' => [
                'metric' => $this->metric,
                'value'  => $this->value,
                'date'   => $this->date->format('m-d-Y'),
                'key'    => $this->apiKey
            ],
        ]);

        return $this->client->send($request)->json();
    }
}
