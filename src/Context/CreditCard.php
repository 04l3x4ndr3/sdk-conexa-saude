<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;

class CreditCard extends HTTPClient
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/save
     * Saves the credit card information for a patient.
     *
     * @param int $patientId The ID of the patient.
     * @param string $holderName The name of the cardholder.
     * @param string $cardNumber The credit card number.
     * @param string $cardExpiration The expiration date of the credit card.
     * @param string $cardSecurityNumber The security number (CVV) of the credit card.
     * @return object The response object from the API call.
     * @throws GuzzleException
     */
    public function save(int $patientId, string $holderName, string $cardNumber, string $cardExpiration, string $cardSecurityNumber): object
    {
        $endpoint = "/integration/enterprise/patients/$patientId/credit-cards/";
        $data = array_filter([
            'holderName' => $holderName,
            'cardNumber' => $cardNumber,
            'cardExpiration' => $cardExpiration,
            'cardSecurityNumber' => $cardSecurityNumber,
        ]);
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/findCreditCards
     * Retrieves credit card information for a specific patient.
     *
     * @param int $patientId The ID of the patient.
     * @return object The response object containing the credit card information.
     * @throws GuzzleException
     */
    public function getByPatientId(int $patientId): object
    {
        $endpoint = "/integration/enterprise/patients/$patientId/credit-cards";
        return $this->call('PATCH', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/setDefault
     * Sets the specified credit card as the default for a given patient.
     *
     * @param int $creditCardId The unique identifier of the credit card to be set as default.
     * @param int $patientId The unique identifier of the patient.
     * @return object The response object from the API call.
     * @throws GuzzleException
     */
    public function setAsDefault(int $creditCardId, int $patientId): object
    {
        $endpoint = "/integration/enterprise/patients/$patientId/credit-cards/$creditCardId/default";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/delete
     * Deletes the specified credit card for a given patient.
     *
     * @param int $creditCardId The unique identifier of the credit card to be deleted.
     * @param int $patientId The unique identifier of the patient.
     * @return object The response object from the API call.
     * @throws GuzzleException
     */
    public function delete(int $creditCardId, int $patientId): object
    {
        $endpoint = "/integration/enterprise/patients/$patientId/credit-cards/$creditCardId";
        return $this->call('DELETE', $endpoint);
    }
}
