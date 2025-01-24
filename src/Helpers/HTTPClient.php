<?php

namespace O4l3x4ndr3\SdkConexa\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;

class HTTPClient
{
    private Configuration $config;
    private ?array $header;
    private ?string $token;
    private string $requestBody = '';

    /**
     * @param Configuration|null $config
     */
    public function __construct(Configuration $config = null)
    {
        $this->config = $config ?? new Configuration();
        $this->token = $this->config->getToken();
        $this->header = [
            "User-Agent" => "SdkConexa/1.0",
            "Accept" => "Application/json",
            "token" => $this->token
        ];
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param array|null $data
     * @param array $extraHeaders
     * @param string|null $context
     * @return object
     * @throws GuzzleException
     */
    public function call(string $method, string $endpoint, ?array $data = null, array $extraHeaders = [], ?string $context = null): object
    {
        $client = new Client();
        $url = $this->config->getUrl($context) . $endpoint;

        $options = array_filter([
            'headers' => array_merge($this->header, $extraHeaders),
            'json' => $data
        ]);

        $this->requestBody = json_encode($data);

        $res = $client->request($method, $url, $options);

        return json_decode($res->getBody());
    }

    public function getRequestBody(): string
    {
        return $this->requestBody;
    }
}
