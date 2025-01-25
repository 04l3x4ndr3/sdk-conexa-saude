<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;

class Clinic extends HTTPClient
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#tag/Clinica/paths/~1integration~1enterprise~1clinic~1config/get
     * Retrieves the configuration settings for the clinic enterprise integration.
     *
     * @return object The configuration data obtained from the API endpoint.
     * @throws GuzzleException
     */
    public function getConfig(): object
    {
        $endpoint = "/integration/enterprise/clinic/config";
        return $this->call('GET', $endpoint);
    }
}
