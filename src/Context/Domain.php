<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;

class Domain extends HTTPClient
{

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/getRaceColor
     * Retrieves the race color information associated with a professional ID.
     *
     * @return object The race color data retrieved from the endpoint.
     * @throws GuzzleException
     */
    public function getRaceColor(): object
    {
        $endpoint = "/integration/enterprise/domain/race-color";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/getNationality
     * Retrieves the nationality information associated with a professional ID.
     *
     * @return object The nationality data retrieved from the endpoint.
     * @throws GuzzleException
     */
    public function getNationality(): object
    {
        $endpoint = "/integration/enterprise/domain/nationality";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/getEducation
     * Retrieves the education information associated with a professional ID.
     *
     * @return object The education data retrieved from the endpoint.
     * @throws GuzzleException
     */
    public function getEducation(): object
    {
        $endpoint = "/integration/enterprise/domain/education";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/getLivingArea
     * Retrieves the living area information associated with a professional ID.
     *
     * @return object The living area data retrieved from the endpoint.
     * @throws GuzzleException
     */
    public function getLivingArea(): object
    {
        $endpoint = "/integration/enterprise/domain/living-area";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/getGender
     * Retrieves the gender information associated with a professional ID.
     *
     * @return object The gender data retrieved from the endpoint.
     * @throws GuzzleException
     */
    public function getGender(): object
    {
        $endpoint = "/integration/enterprise/domain/gender";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/getCountry
     * Retrieves the country information associated with a professional ID.
     *
     * @return object The country data retrieved from the endpoint.
     * @throws GuzzleException
     */
    public function getCountry(): object
    {
        $endpoint = "/integration/enterprise/domain/country";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/getUF
     * Retrieves the UF (Federative Unit) information from the system.
     *
     * @return object The UF data retrieved from the specified endpoint.
     * @throws GuzzleException
     */
    public function getUF(): object
    {
        $endpoint = "/integration/enterprise/domain/uf";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/getCBO
     * Retrieves the CBO (Brazilian Occupational Classification) information.
     *
     * @return object The CBO data retrieved from the endpoint.
     * @throws GuzzleException
     */
    public function getCBO(): object
    {
        $endpoint = "/integration/enterprise/domain/cbos";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/getReligion
     * Retrieves the religion information associated with a professional ID.
     *
     * @return object The religion data retrieved from the endpoint.
     * @throws GuzzleException
     */
    public function getReligion(): object
    {
        $endpoint = "/integration/enterprise/domain/religion";
        return $this->call('GET', $endpoint);
    }
}
