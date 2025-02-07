<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;

class Psychologist extends HTTPClient
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/psychologistAgeRanges
     * Retrieves the age ranges for healthcare professionals, specifically psychologists.
     *
     * @return object An object containing the age range data.
     * @throws GuzzleException
     */
    public function getAgeRanges(): object
    {
        $endpoint = "/integration/enterprise/healthcare-professionals/psychologists/age-ranges";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/psychologistSpecialties
     * Retrieves the specialties for healthcare professionals, specifically psychologists.
     *
     * @return object An object containing the specialty data.
     * @throws GuzzleException
     */
    public function getSpecialties(): object
    {
        $endpoint = "/integration/enterprise/healthcare-professionals/psychologists/specialties";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/psychologistThemes
     * Retrieves the themes associated with healthcare professionals, specifically psychologists.
     *
     * @return object An object containing the theme data.
     * @throws GuzzleException
     */
    public function getThemes(): object
    {
        $endpoint = "/integration/enterprise/healthcare-professionals/psychologists/themes";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/psychologistApproaches
     * Retrieves the approaches for healthcare professionals, specifically psychologists.
     *
     * @return object An object containing the approaches' data.
     * @throws GuzzleException
     */
    public function getApproaches(): object
    {
        $endpoint = "/integration/enterprise/healthcare-professionals/psychologists/approaches";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/psychologistOccupationAreas
     * Retrieves the occupation areas for healthcare professionals, specifically psychologists.
     *
     * @return object An object containing the occupation area data.
     * @throws GuzzleException
     */
    public function getOccupationAreas(): object
    {
        $endpoint = "/integration/enterprise/healthcare-professionals/psychologists/occupation-areas";
        return $this->call('GET', $endpoint);
    }
}
