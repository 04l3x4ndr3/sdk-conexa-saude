<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;
use O4l3x4ndr3\SdkConexa\Types\DoctorRequest;
use O4l3x4ndr3\SdkConexa\Types\ProfessionalRequest;

class Doctor extends HTTPClient
{

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2DoctorAvailableTimes
     * Retrieves the available times for a specific doctor on a given date.
     *
     * @param int $id The identifier of the doctor.
     * @param string $date The date for which to fetch available times in YYYY-MM-DD format.
     *
     * @return object The response object containing the available times.
     * @throws GuzzleException
     */
    public function getAvailableTimes(int $id, string $date): object
    {
        $params = http_build_query([
            'id' => $id,
            'date' => $date
        ]);
        $endpoint = "/integration/enterprise/v2/doctor/availabletimes?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/doctorInsertion
     * Inserts a doctor record into the system.
     *
     * @param ProfessionalRequest $Doctor The doctor object to be inserted, represented as a Doctor type.
     * @return object The response object containing the result of the operation.
     * @throws GuzzleException
     */
    public function insert(ProfessionalRequest $Doctor): object
    {
        $endpoint = "/integration/enterprise/doctors";
        $data = $Doctor->toArray();
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/doctorBYId
     * Retrieves a doctor record by its unique identifier.
     *
     * @param int $id The unique identifier of the doctor to be retrieved.
     * @param int|null $appointmentId Optional appointment identifier to filter the response.
     * @return object The response object containing the details of the doctor.
     * @throws GuzzleException
     */
    public function getById(int $id, ?int $appointmentId = null): object
    {
        $params = !empty($appointmentId) ? http_build_query(['appointmentId' => $appointmentId]) : null;
        $endpoint = "/integration/enterprise/doctors/$id?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2DoctorActivateBYId
     * Activates a doctor record in the system by its unique identifier.
     *
     * @param int $id The unique identifier of the doctor to be activated.
     * @return object The response object containing the result of the activation operation.
     * @throws GuzzleException
     */
    public function activateById(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/doctors/$id/activate";
        return $this->call('POST', $endpoint);
    }

    /**
     * Deactivates a doctor by their unique identifier within the system.
     *
     * @param int $id The unique identifier of the doctor to be deactivated.
     * @return object The response object containing the result of the operation.
     * @throws GuzzleException
     */
    public function inativeById(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/doctors/$id/inactivate";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/doctorByCpf
     * Retrieves a doctor's record based on the provided CPF.
     *
     * @param int $cpf The CPF of the doctor to be retrieved.
     * @param int|null $onlyActive Optional parameter to filter only active records. Pass null to fetch regardless of status.
     * @return object The response object containing the doctor's record or an error if not found.
     * @throws GuzzleException
     */
    public function getByCpf(int $cpf, ?int $onlyActive = null): object
    {
        $params = !empty($onlyActive) ? http_build_query(['$onlyActive' => $onlyActive]) : null;
        $endpoint = "/integration/enterprise/doctors/cpf/$cpf?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/doctorsSpecialities
     * Retrieves the list of available doctor specialties from the system.
     *
     * @return object The response object containing the list of doctor specialties.
     * @throws GuzzleException
     */
    public function getSpecialities(): object
    {
        $endpoint = "/integration/enterprise/doctors/specialties";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/doctorsByName
     * Retrieves a paginated list of doctors filtered by name, patient ID, or sort type.
     *
     * @param int $page The page number for the paginated results.
     * @param string|null $name Optional. The name of the doctor to filter results.
     * @param int|null $patientId Optional. The ID of the patient to filter results based on association.
     * @param string|null $sortType Optional. The sorting type for the results. Allowed values are "NAME" or "NEAREST_DATE".
     * @return object The response object containing the list of doctors.
     * @throws GuzzleException
     */
    public function getByName(int $page, ?string $name = null, ?int $patientId = null, ?string $sortType = null): object
    {
        $params = array_filter([
            'name' => $name,
            'patientId' => $patientId,
            'sortType' => !in_array($sortType, ["NAME", "NEAREST_DATE"]) ? null : $sortType,
        ]);
        if (!empty($params)) $params = http_build_query($params);
        $endpoint = "/integration/enterprise/doctors/name/$page?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/doctorsBySpecialtyByName
     * Retrieves a list of doctors based on specialty and additional optional criteria.
     *
     * @param int $specialtyId The ID of the specialty to filter doctors by.
     * @param int $page The page number for pagination.
     * @param string|null $name Optional. The name or partial name of the doctor to search for.
     * @param int|null $patientId Optional. The ID of the patient to filter the doctors by.
     * @param string|null $sortType Optional. The sorting type for the results. Valid values are "NAME" and "NEAREST_DATE".
     * @return object The response object containing the list of doctors and related data.
     * @throws GuzzleException
     */
    public function getBySpecialtyByName(int $specialtyId, int $page, ?string $name = null, ?int $patientId = null, ?string $sortType = null): object
    {
        $params = array_filter([
            'name' => $name,
            'patientId' => $patientId,
            'sortType' => !in_array($sortType, ["NAME", "NEAREST_DATE"]) ? null : $sortType,
        ]);
        if (!empty($params)) $params = http_build_query($params);
        $endpoint = "/integration/enterprise/doctors/specialty/$specialtyId/$page?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/doctorsAvailableSchedule
     * Retrieves the available schedule for a specified doctor within a certain timeframe.
     *
     * @param int $doctorId The unique identifier of the doctor whose schedule is being retrieved.
     * @param string $startDate The start date from which to check available schedules, formatted as YYYY-MM-DD.
     * @return object The response object containing the available schedule details.
     * @throws GuzzleException
     */
    public function getAvailableSchedule(int $doctorId, string $startDate): object
{
    $params = array_filter(['startDate' => $startDate]);
    if (!empty($params)) $params = http_build_query($params);
    $endpoint = "/integration/enterprise/doctors/1036/schedule/available?$params";
    return $this->call('GET', $endpoint);
}

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/doctorReport
     * Retrieves a report of doctors based on their status.
     *
     * @param bool $active Indicates whether to include active doctors in the report.
     * @param bool $inactive Indicates whether to include inactive doctors in the report.
     * @param bool $blocked Indicates whether to include blocked doctors in the report.
     * @param int|null $page The page number for pagination, null for no pagination.
     * @return object The response object containing the requested report data.
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
        $endpoint = "/integration/enterprise/doctors/report?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2DoctorBlockById
     * Blocks a doctor in the system by their unique identifier.
     *
     * @param int $id The unique identifier of the doctor to be blocked.
     * @return object The response object containing the result of the operation.
     * @throws GuzzleException
     */
    public function blockById(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/doctors/$id/block";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2DoctorUnblockById
     * Unblocks a doctor using their unique identifier.
     *
     * @param int $id The unique identifier of the doctor to be unblocked.
     * @return object The response object from the unblock operation.
     * @throws GuzzleException
     */
    public function unblockById(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/doctors/$id/unblock";
        return $this->call('POST', $endpoint);
    }

}
