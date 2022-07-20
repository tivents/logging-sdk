<?php

namespace TiventsLogging;

use GuzzleHttp\Client;

class BaseController
{
    public function __construct()
    {
        $this->restClient = new Client([
            'base_uri' => $_ENV['TIVENTS_LOG_URL'],
            'headers' => ['Content-Type' => 'application/json'],
        ]);
    }

    public function post($data)
    {
        return $this->restClient->post('api/logging', $data);
    }
}
