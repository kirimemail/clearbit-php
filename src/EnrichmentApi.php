<?php

namespace Kirimemail\Clearbit;

use Kirimemail\Clearbit\Abstracts\Api;

class EnrichmentApi extends Api
{
    private static $apiUrlTemplate = 'https://pk:@%s%s.clearbit.com/v2/%s/find?%s=%s';

    public function __construct($key, $client = null)
    {
        self::$apiUrlTemplate = preg_replace('(pk)', $key, self::$apiUrlTemplate);
        $this->httpClient = $client;
    }

    public function combined($email)
    {
        $apiUrl = $this->composeUrl('person', 'combined', 'email', $email);
        return $this->call($apiUrl, $this->httpClient);
    }

    public function risk($datas)
    {
        $apiUrl = 'https://risk.clearbit.com/v1/calculate';
        return $this->post($apiUrl, $body = $datas);
    }


}