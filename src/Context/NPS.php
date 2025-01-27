<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;
use O4l3x4ndr3\SdkConexa\Types\EvaluationRequest;

class NPS extends HTTPClient
{

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/saveNps
     * Saves the NPS evaluation data for a specific appointment.
     *
     * @param int $appointmentId The identifier of the appointment.
     * @param EvaluationRequest $professional The evaluation details regarding the professional.
     * @param EvaluationRequest $platform The evaluation details regarding the platform.
     * @return object The response object from the API call.
     * @throws GuzzleException
     */
    public function save(int $appointmentId, EvaluationRequest $professional, EvaluationRequest $platform): object
    {
        $data = array_filter([
            'appointmentId' => $appointmentId,
            'professional' => $professional->toArray(),
            'platform' => $platform->toArray()
        ]);
        $endpoint = "/integration/enterprise/nps/save";
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2Resend
     * Resends the notification for a specified appointment ID using the provided professional and platform evaluations.
     *
     * @param int $appointmentId The ID of the appointment to resend the notification for.
     * @return object The response object from the resend operation.
     * @throws GuzzleException
     */
    public function resend(int $appointmentId): object
    {
        $endpoint = "/integration/enterprise/v2/nps/resend/$appointmentId/appointment";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/npsFilter
     * Retrieves records filtered by a specified date range.
     *
     * @param string $startDate The start date of the date range in 'YYYY-MM-DD' format.
     * @param string $endDate The end date of the date range in 'YYYY-MM-DD' format.
     * @return object The response object containing the filtered data based on the provided date range.
     * @throws GuzzleException
     */
    public function getByDate(string $startDate, string $endDate): object
    {
        $params = http_build_query([
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
        $endpoint = "/integration/enterprise/nps/filter?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/npsAppointment
     * Retrieves appointment information for the specified appointment ID.
     *
     * @param string $appointmentId The ID of the appointment to retrieve information for.
     * @return object The response object containing the appointment details.
     * @throws GuzzleException
     */
    public function getByAppointmentId(string $appointmentId): object
    {
        $endpoint = "/integration/enterprise/nps/$appointmentId/appointment";
        return $this->call('GET', $endpoint);
    }

}
