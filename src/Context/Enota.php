<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;

class Enota extends HTTPClient
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/sendEnotaByAttendanceId
     * Sends invoice data for a specific attendance ID to the designated endpoint.
     *
     * @param int $attendanceId The unique identifier for the attendance.
     * @param string $amountPaid The amount paid that will be processed in the invoice.
     * @param string|null $id An optional unique identifier for the invoice.
     * @param string|null $discrimination An optional string for additional data classification or labeling.
     * @return object The response object from the API call.
     * @throws GuzzleException
     */
    public function sendByAttendanceId(int $attendanceId, string $amountPaid, ?string $id = null, ?string $discrimination = null): object
    {
        $data = array_filter([
            'amountPaid' => $amountPaid,
            'id' => $id,
            'discrimination' => $discrimination,
        ]);
        $endpoint = "/integration/enterprise/invoice/attendance/$attendanceId/send/";
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/sendEnotaByPatientId
     * Sends invoice information for a specific patient by their ID.
     *
     * @param int $patientId The unique identifier of the patient.
     * @param string $amountPaid The amount paid by the patient for the invoice.
     * @param string|null $id An optional identifier for the invoice.
     * @param string|null $discrimination Optional additional information or metadata for the invoice.
     * @return object The response object resulting from the API call.
     * @throws GuzzleException
     */
    public function sendByPatientId(int $patientId, string $amountPaid, ?string $id = null, ?string $discrimination = null): object
    {
        $data = array_filter([
            'amountPaid' => $amountPaid,
            'id' => $id,
            'discrimination' => $discrimination,
        ]);
        $endpoint = "/integration/enterprise/invoice/patient/$patientId/send/";
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/cancelEnotaById
     * Cancels an invoice identified by the given ID.
     *
     * @param int $idEnota The unique identifier of the invoice to cancel.
     * @return object The response object from the API call.
     * @throws GuzzleException
     */
    public function cancelById(int $idEnota): object
    {
        $endpoint = "/integration/enterprise/invoice/$idEnota/cancel/";
        return $this->call('POST', $endpoint);
    }


}
