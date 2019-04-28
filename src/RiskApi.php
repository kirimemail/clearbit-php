<?php

namespace Kirimemail\Clearbit;

use Kirimemail\Clearbit\Abstracts\Api;
use GuzzleHttp\Client;

class RiskApi extends Api
{
    private static $apiUrlTemplate = 'https://risk.clearbit.com/v1/calculate';
    protected $key;

    public function __construct($key, $client = null)
    {
        $this->httpClient = $client;
        $this->key = $key;
    }


    public function risk(array $body = [])
    {
        $apiUrl = self::$apiUrlTemplate;
        $client = new Client(['http_errors' => false,
            'auth' => [$this->key , ''],
        ]);
        return $this->post($apiUrl, $body, $successCode = 200, $client);
    }


}