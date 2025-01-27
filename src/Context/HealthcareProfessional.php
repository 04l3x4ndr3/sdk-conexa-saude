<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;
use O4l3x4ndr3\SdkConexa\Types\ProfessionalRequest;
use ProfessionalType;

class HealthcareProfessional extends HTTPClient
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/healthcareProfessionalInsert
     * Inserts a healthcare professional into the system by sending the required data to the specified endpoint.
     *
     * @param ProfessionalRequest $healthcareProfessional Object containing healthcare professional data to be inserted.
     * @return object Response object returned from the API after the insertion is performed.
     * @throws GuzzleException
     */
    public function insert(ProfessionalRequest $healthcareProfessional): object
    {
        $endpoint = 'integration/enterprise/healthcare-professionals';
        $data = $healthcareProfessional->toArray();
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2HealthcareProfessionalActivateById
     * Activates a healthcare professional by their unique identifier.
     *
     * @param int $id The unique identifier of the healthcare professional to be activated.
     * @return object The response object from the activate endpoint.
     * @throws GuzzleException
     */
    public function activeById(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/healthcare-professionals/$id/activate";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2HealthcareProfessionalInactivateById
     * Inactivates a healthcare professional by their unique identifier.
     *
     * @param int $id The unique identifier of the healthcare professional to be inactivated.
     * @return object The response object from the inactivate endpoint.
     * @throws GuzzleException
     */
    public function inactiveById(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/healthcare-professionals/$id/inactivate";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2healthcareProfessionalById
     * Retrieves a healthcare professional by their unique identifier, with optional parameters for filtering.
     *
     * @param int $id The unique identifier of the healthcare professional to be retrieved.
     * @param ProfessionalType $professionalType The type of the healthcare professional.
     * @param int|null $appointmentId (Optional) The unique identifier of the appointment for filtering.
     * @param int|null $patientId (Optional) The unique identifier of the patient for filtering.
     * @return object The response object containing the healthcare professional's information.
     * @throws GuzzleException
     */
    public function getById(int $id, ProfessionalType $professionalType, ?int $appointmentId = null, ?int $patientId = null): object
    {
        $params = array_filter([
            'patientId' => $patientId,
            'professionalType' => $professionalType,
            'appointmentId' => $appointmentId
        ]);
        if (!empty($params)) $params = http_build_query($params);
        $endpoint = "/integration/enterprise/v2/healthcare-professionals/$id?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2healthcareProfessionalWithoutCalendarById
     * Retrieves a healthcare professional by their unique identifier without the associated calendar information.
     *
     * @param int $id The unique identifier of the healthcare professional to be retrieved.
     * @param ProfessionalType $professionalType The type of the healthcare professional.
     * @return object The response object containing the healthcare professional details without calendar information.
     * @throws GuzzleException
     */
    public function getWithoutCalendarById(int $id, ProfessionalType $professionalType): object
    {
        $params = array_filter(['professionalType' => $professionalType,]);
        if (!empty($params)) $params = http_build_query($params);
        $endpoint = "/integration/enterprise/v2/healthcare-professionals/without-calendar/$id?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2HealthcareProfessionalAvailabletimes
     * Retrieves available times for a healthcare professional on a specified date.
     *
     * @param int $id The unique identifier of the healthcare professional.
     * @param string $date The date for which the available times are to be retrieved (in YYYY-MM-DD format).
     * @return object The response object containing the available times.
     * @throws GuzzleException
     */
    public function getAvailabletimes(int $id, string $date): object
    {
        $params = array_filter(['id' => $id, 'professionalType' => $date]);
        if (!empty($params)) $params = http_build_query($params);
        $endpoint = "/integration/enterprise/v2/healthcare-professionals/availabletimes?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/healthcareProfessionalByCpf
     * Retrieves a healthcare professional's information using their CPF (Cadastro de Pessoas Físicas) number.
     *
     * @param int $cpf The CPF number of the healthcare professional.
     * @param int|null $onlyActive Optional parameter to filter by active professionals only. Use 1 for active and null for all.
     * @return object The response object containing the healthcare professional's details.
     * @throws GuzzleException
     */
    public function getByCpf(int $cpf, ?int $onlyActive = null): object
    {
        $params = !empty($onlyActive) ? http_build_query(['$onlyActive' => $onlyActive]) : null;
        $endpoint = "/integration/enterprise/healthcare-professionals/cpf/$cpf?$params";
        return $this->call('GET', $endpoint);
    }


    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/healthcareProfessionalTypes
     * Retrieves the list of available healthcare professional types.
     *
     * @return object The response object containing the available types.
     * @throws GuzzleException
     */
    public function getTypes(): object
    {
        $endpoint = "/integration/enterprise/healthcare-professionals/types";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2HealthcareProfessionalsByName
     * Retrieves a paginated list of healthcare professionals by their name, filtered by various optional parameters.
     *
     * @param int $page The page number to retrieve in the search results.
     * @param ProfessionalType $professionalType The type of healthcare professional to filter the results.
     * @param int $patientId The ID of the patient for whom the healthcare professional is being searched.
     * @param string|null $name An optional name fragment to filter professionals.
     * @param string|null $theme An optional theme to filter professionals by theme.
     * @param string|null $occupationArea An optional occupation area to filter professionals.
     * @param string|null $specialty An optional specialty to filter professionals by specialty.
     * @param string|null $approach An optional approach type to filter professionals.
     * @param string|null $ageRange An optional age range to filter professionals by their target audience.
     * @param string|null $searchByTriage An optional parameter to filter by triage settings.
     * @param string|null $executeCount An optional parameter indicating whether to return the count of results.
     * @param string|null $sortType An optional sorting type, allowed values are "NAME" or "NEAREST_DATE".
     * @return object The response object containing the paginated list of healthcare professionals.
     * @throws GuzzleException
     */
    public function getByName(int $page, ProfessionalType $professionalType, int $patientId, ?string $name = null, ?string $theme = null, ?string $occupationArea = null, ?string $specialty = null, ?string $approach = null, ?string $ageRange = null, ?string $searchByTriage = null, ?string $executeCount = null, ?string $sortType = null): object
    {
        $params = array_filter([
            'professionalType' => $professionalType,
            'patientId' => $patientId,
            'name' => $name,
            'theme' => $theme,
            'occupationArea' => $occupationArea,
            'specialty' => $specialty,
            'approach' => $approach,
            'ageRange' => $ageRange,
            'searchByTriage' => $searchByTriage,
            'executeCount' => $executeCount,
            'sortType' => !in_array($sortType, ["NAME", "NEAREST_DATE"]) ? null : $sortType,
        ]);
        if (!empty($params)) $params = http_build_query($params);
        $endpoint = "/integration/enterprise/v2/healthcare-professionals/name/$page?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2HealthcareProfessionalsAvailableSchedule
     * Retrieves the available schedule for a specific healthcare professional.
     *
     * @param int $id The unique identifier of the healthcare professional.
     * @param string $startDate The starting date to filter the schedule (format: YYYY-MM-DD).
     * @param ProfessionalType|null $professionalType The type of professional to filter the schedule, if applicable.
     * @param int|null $patientId The unique identifier of the patient, if applicable.
     * @return object The response object containing the available schedules.
     * @throws GuzzleException
     */
    public function getAvailableSchedule(int $id, string $startDate, ?ProfessionalType $professionalType = null, ?int $patientId = null): object
    {
        $params = array_filter([
            'startDate' => $startDate,
            'professionalType' => enum_exists($professionalType->value) ? $professionalType->value : null,
            'patientId' => $patientId,
        ]);
        if (!empty($params)) $params = http_build_query($params);
        $endpoint = "/integration/enterprise/v2/healthcare-professionals/1513/schedule/available?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/healthcareProfessionalReport
     * Retrieves a healthcare professionals report based on the specified filter criteria.
     *
     * @param bool $active Indicates whether to include active healthcare professionals in the report.
     * @param bool $inactive Indicates whether to include inactive healthcare professionals in the report.
     * @param bool $blocked Indicates whether to include blocked healthcare professionals in the report.
     * @param int|null $page Optional parameter to specify the page for paginated results.
     * @return object The response object containing the report data.
     * @throws GuzzleException
     */
    public function getReport(bool $active, bool $inactive, bool $blocked, ?int $page = null): object
    {
        $params = array_filter([
            'active' => $active,
            'inactive' => $inactive,
            'blocked' => $blocked,
            'page' => $page
        ]);
        if (!empty($params)) $params = http_build_query($params);
        $endpoint = "/integration/enterprise/healthcare-professionals/report?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/healthcareProfessionalMagicLink
     * Generates a magic link for a healthcare professional using their unique identifier.
     *
     * @param int $professionalId The unique identifier of the healthcare professional for whom the magic link is generated.
     * @return object The response object containing the generated magic link data.
     * @throws GuzzleException
     */
    public function generateMagicLink(int $professionalId): object
    {
        $endpoint = "/integration/enterprise/professional/magic-link";
        $data = ['professionalId' => $professionalId];
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/healthcareProfessionalMagicLinkV2
     * Generates a unique magic link for the specified healthcare professional.
     * This link can be used for secure authentication or personalized access.
     *
     * @param int $professionalId The unique identifier of the healthcare professional.
     * @param ProfessionalType|null $professionalType The type of the professional (optional).
     * @param string|null $route A specific route to be appended to the magic link (optional).
     * @param int|null $appointmentId The unique identifier of an appointment related to the professional (optional).
     * @return object The response object containing the generated magic link.
     * @throws GuzzleException
     */
    public function generateUniqueMagicLink(int $professionalId, ?ProfessionalType $professionalType = null, ?string $route = null, ?int $appointmentId = null): object
    {
        $params = array_filter([
            'professionalType' => enum_exists($professionalType->value) ? $professionalType->value : null,
            'route' => $route,
            'appointmentId' => $appointmentId,
        ]);
        $endpoint = "/integration/enterprise/v2/professionals/$professionalId/magic-link";
        $data = ['professionalId' => $professionalId];
        return $this->call('GET', $endpoint, $data);
    }
}
