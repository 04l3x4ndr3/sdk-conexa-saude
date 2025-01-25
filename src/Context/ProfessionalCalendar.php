<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;
use WeekDay;

class ProfessionalCalendar extends HTTPClient
{

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/professionalCalendar
     * Retrieves the calendar information of a professional using their unique identifier.
     *
     * @param int $professionalId The unique identifier of the professional.
     * @return object The calendar details of the specified professional.
     * @throws GuzzleException
     */
    public function getByProfessionalId(int $professionalId): object
    {
        $endpoint = "/integration/enterprise/professional/calendar/$professionalId";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/addProfessionalCalendar
     * Adds a new time period to the professional's calendar.
     *
     * @param int $professionalId Identifier of the professional whose calendar is being updated.
     * @param WeekDay $dayWeek Day of the week for the new period, represented as an enum.
     * @param string $initialHour Start time of the period in HH:mm format.
     * @param string $finalHour End time of the period in HH:mm format.
     *
     * @return object Response object from the API call.
     * @throws GuzzleException
     */
    public function addPeriod(int $professionalId, WeekDay $dayWeek, string $initialHour, string $finalHour): object
    {
        $data = array_filter([
            'professionalId' => $professionalId,
            'dayWeek' => enum_exists($dayWeek->value) ? $dayWeek->value : null,
            'initialHour' => $initialHour,
            'finalHour' => $finalHour,
        ]);
        $endpoint = "/integration/enterprise/professional/add-calendar";
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/removeProfessionalCalendar
     * Removes a time period from the professional's calendar.
     *
     * @param int $calendarID Identifier of the calendar entry to be removed.
     * @param int $professionalId Identifier of the professional whose calendar entry is being removed.
     *
     * @return object Response object from the API call.
     * @throws GuzzleException
     */
    public function removePeriod(int $calendarID, int $professionalId): object
    {
        $endpoint = "/integration/enterprise/professional/remove-calendar/$calendarID/$professionalId";
        return $this->call('DELETE', $endpoint);
    }
}
