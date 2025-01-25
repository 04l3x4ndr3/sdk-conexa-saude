<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;

class Prices extends HTTPClient
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/findPricesByProfessionalId
     * Retrieves pricing information for a professional based on their unique professional ID.
     *
     * @param int $professionalId The unique identifier of the professional.
     * @return object The response object containing pricing details for the specified professional.
     * @throws GuzzleException
     */
    public function findByProfessionalId(int $professionalId): object
    {
        $endpoint = "/integration/enterprise/professionals/id/$professionalId/prices";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/findDoctorPrices
     * Retrieves professional price details based on the provided professional type.
     *
     * @param \ProfessionalType $professionalType The type of professional for which the price details are to be retrieved.
     * @return object The response object containing the professional price details.
     * @throws GuzzleException
     */
    public function findByProfessionalType(\ProfessionalType $professionalType): object
    {
        $params = array_filter([
            'professionalType' => enum_exists($professionalType->value) ? $professionalType->value : null,
        ]);
        $endpoint = "/integration/enterprise/professionals/prices?$params";
        return $this->call('GET', $endpoint);
    }
}
