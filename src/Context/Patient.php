<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;
use O4l3x4ndr3\SdkConexa\Types\PatientAddressRequest;
use O4l3x4ndr3\SdkConexa\Types\PatientFamilyGroupRequest;
use O4l3x4ndr3\SdkConexa\Types\PatientRequest;

class Patient extends HTTPClient
{
    private Patient $patient;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/familyGroup
     * Inserts patient data and their dependents into the family group integration endpoint.
     *
     * @param PatientRequest $patient The patient data to be inserted.
     * @param array|null $dependents An optional array of dependents associated with the patient.
     * @return object The response object from the API call.
     * @throws GuzzleException
     */
    public function insertFamilyGroup(PatientRequest $patient, ?array $dependents = null): object
    {
        $endpoint = "/integration/enterprise/family-group";
        $data = [
            'holder' => $patient->toArray(),
        ];

        if (!empty($dependents)) {
            $data['dependents'] = [];

            /**
             * @var PatientFamilyGroupRequest $dep
             */
            foreach ($dependents as $dep) {
                $data['dependents'][] = $dep->toArray();
            }
        }

        return $this->call('POST', $endpoint, array_filter($data));
    }


    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/insertPatient
     * Saves the patient data to the specified endpoint.
     *
     * @param PatientRequest $patient The patient request object containing the data to be stored.
     * @return object The response object returned from the API call.
     * @throws GuzzleException
     */
    public function savePatient(PatientRequest $patient): object
    {
        $endpoint = "/integration/enterprise/patients";
        $data = $patient->toArray();
        return $this->call('POST', $endpoint, array_filter($data));
    }

    /**
     * http://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientById
     * Retrieves a patient's details by their unique identifier from the specified endpoint.
     *
     * @param int $id The unique identifier of the patient.
     * @return object The response object containing the patient's details.
     * @throws GuzzleException
     */
    public function getById(int $id): object
    {
        $endpoint = "/integration/enterprise/patients/$id";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientByCpf
     * Retrieves patient information using the CPF from the specified endpoint.
     *
     * @param int $cpf The CPF number of the patient to be retrieved.
     * @return object The response object containing the patient data.
     * @throws GuzzleException
     */
    public function getByCpf(int $cpf): object
    {
        $endpoint = "/integration/enterprise/patients/cpf/$cpf";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/anypatientByCpf
     * Retrieves patient data by CPF from the specified endpoint.
     *
     * @param int $cpf The CPF identifier of the patient.
     * @return object The response object containing the patient data retrieved from the API call.
     * @throws GuzzleException
     */
    public function getAnyByCpf(int $cpf): object
    {
        $endpoint = "/integration/enterprise/any/patients/cpf/$cpf";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientByHealthCardNumber
     * Retrieves patient information using the provided health card number.
     *
     * @param int $healthCardNumber The health card number used to identify the patient.
     * @return object The response object containing the patient's information.
     * @throws GuzzleException
     */
    public function getByHealthCardNumber(int $healthCardNumber): object
    {
        $endpoint = "/integration/enterprise/patients/healthCardNumber/$healthCardNumber";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2PatientActivateById
     * Activates a patient by their unique identifier.
     *
     * @param int $id The unique identifier of the patient to be activated.
     * @return object The response object returned from the API call.
     * @throws GuzzleException
     */
    public function activateById(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/patients/$id/activate";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2PatientInactivateById
     * Inactivates a patient by their unique identifier.
     *
     * @param int $id The unique identifier of the patient to be inactivated.
     * @return object The response object returned from the API call.
     * @throws GuzzleException
     */
    public function inactivateById(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/patients/$id/inactivate";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2PatientBlockById
     * Blocks a patient by their unique identifier.
     *
     * @param int $id The unique identifier of the patient to be blocked.
     * @return object The response object returned from the API call.
     * @throws GuzzleException
     */
    public function blockById(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/patients/$id/block";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2PatientUnblockById
     * Unblocks a patient identified by the given ID.
     *
     * @param int $id The unique identifier of the patient to be unblocked.
     * @return object The response object returned from the API call.
     * @throws GuzzleException
     */
    public function unblockById(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/patients/$id/unblock";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2PatientBlockByHealthCardNumber
     * Blocks a patient by their health card number.
     *
     * @param int $healthCard The health card number of the patient to be blocked.
     * @return object The response object returned from the API call.
     * @throws GuzzleException
     */
    public function blockByHealthCardNumber(int $healthCard): object
    {
        $endpoint = "/integration/enterprise/v2/patients/healthCard/$healthCard/block";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2PatientUnblockByHealthCardNumber
     * Unblocks a patient identified by the provided health card number.
     *
     * @param int $healthCard The health card number of the patient to be unblocked.
     * @return object The response object returned from the API call.
     * @throws GuzzleException
     */
    public function unblockByHealthCardNumber(int $healthCard): object
    {
        $endpoint = "/integration/enterprise/v2/patients/healthCard/$healthCard/unblock";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientStatusCpf
     * Retrieves the status of a patient by their CPF number.
     *
     * @param int $cpf The CPF number of the patient whose status is to be retrieved.
     * @return object The response object containing the patient's status information.
     * @throws GuzzleException
     */
    public function getStatusByCpf(int $cpf): object
    {
        $endpoint = "/integration/enterprise/patients/status/cpf/$cpf";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientStatusHealthCardNumber
     * Retrieves the status of a patient using their health card number.
     *
     * @param int $healthCard The health card number of the patient.
     * @return object The response object containing the patient's status details.
     * @throws GuzzleException
     */
    public function getStatusByHealthCardNumber(int $healthCard): object
    {
        $endpoint = "/integration/enterprise/patients/status/healthCardNumber/$healthCard";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientStatusId
     * Retrieves the status of a patient by their ID.
     *
     * @param int $id The unique identifier of the patient.
     * @return object The response object containing the patient's status.
     * @throws GuzzleException
     */
    public function getStatusById(int $id): object
    {
        $endpoint = "/integration/enterprise/patients/status/id/$id";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2PatientResetPassword
     * Resets the password for a specific patient.
     *
     * @param int $id The unique identifier of the patient whose password needs to be reset.
     * @return object The response object returned after processing the password reset request.
     * @throws GuzzleException
     */
    public function resetPassword(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/patients/$id/reset-password";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2PatientSendWelcomeMail
     * Sends a welcome email to a patient identified by the provided ID.
     *
     * @param int $id The unique identifier of the patient.
     * @return object The response object from the API call.
     * @throws GuzzleException
     */
    public function sendWelcomeMail(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/patients/$id/send-welcome-mail";
        return $this->call('POST', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientChangeCellphone
     * Updates the cellphone number for a specific patient.
     *
     * @param int $id The unique identifier of the patient whose cellphone number is being updated.
     * @param string $newCellphoneNumber The new cellphone number to be set for the specified patient.
     * @return object The response object returned after processing the cellphone number update request.
     * @throws GuzzleException
     */
    public function changeCellphone(int $id, string $newCellphoneNumber): object
    {
        $endpoint = "/integration/enterprise/patients/$id/change-cellphone";
        $data = [
            'newCellphoneNumber' => $newCellphoneNumber
        ];
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientChangeMail
     * Updates the email address for a specific patient.
     *
     * @param int $id The unique identifier of the patient whose email needs to be updated.
     * @param string $newMail The new email address to be assigned to the patient.
     * @return object The response object returned after processing the email update request.
     * @throws GuzzleException
     */
    public function changeMail(int $id, string $newMail): object
    {
        $endpoint = "/integration/enterprise/patients/$id/change-mail";
        $data = [
            'newMail' => $newMail
        ];
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientInsertAddress
     * Inserts a new address for a patient using the provided ID and address details.
     *
     * @param int $id The unique identifier of the patient.
     * @param PatientAddressRequest $address The address details to be inserted.
     * @return object The response object from the API call.
     * @throws GuzzleException
     */
    public function insertAddress(int $id, PatientAddressRequest $address): object
    {
        $endpoint = "/integration/enterprise/patients/$id/change-mail";
        $data = $address->toArray();
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientChangePassword
     * Updates the password for a patient using the provided ID, new password, and confirmation.
     *
     * @param int $id The unique identifier of the patient.
     * @param string $password The new password to be set.
     * @param string $passwordConfirmation The confirmation of the new password.
     * @return object The response object from the API call.
     * @throws GuzzleException
     */
    public function changePassword(int $id, string $password, string $passwordConfirmation): object
    {
        $endpoint = "/integration/enterprise/patients/$id/change-password";
        $data = [
            'password' => $password,
            'passwordConfirmation' => $passwordConfirmation,
        ];
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientAcceptTerms
     * Records the acceptance of terms by a patient, providing their ID and IP address.
     *
     * @param int $id The unique identifier of the patient.
     * @param string $ip The IP address of the patient at the time of acceptance.
     * @return object The response object from the API call.
     * @throws GuzzleException
     */
    public function acceptTerms(int $id, string $ip): object
    {
        $endpoint = "/integration/enterprise/patients/accept/term";
        $data = [
            'idPatient' => $id,
            'ip' => $ip,
        ];
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#tag/Paciente/paths/~1integration~1enterprise~1patients~1{id}~1term~1accept/get
     * Retrieves the acceptance terms details for a specific patient.
     *
     * @param int $id The unique identifier of the patient.
     * @return object The response object containing the terms acceptance details.
     * @throws GuzzleException
     */
    public function getAcceptTerms(int $id): object
    {
        $endpoint = "/integration/enterprise/patients/$id/term/accept";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2PatientFilter
     * Retrieves patient information by their date of birth and name.
     *
     * @param string $dateBirth The date of birth of the patient in YYYY-MM-DD format.
     * @param string $name The full name or part of the name of the patient.
     * @return object The response object containing the filtered patient data.
     * @throws GuzzleException
     */
    public function getByDateBirthAndName(string $dateBirth, string $name): object
    {
        $params = http_build_query([
            'dateBirth' => $dateBirth,
            'name' => $name,
        ]);
        $endpoint = "/integration/enterprise/v2/patients/filter?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/generateMagicLinkPatient
     * Generates a magic link for a patient using the provided ID and optional parameters.
     *
     * @param int $id The unique identifier of the patient.
     * @param array $options Optional parameters to customize the generated magic link.
     *                       Possible keys include:
     *                       - 'route': specifies a custom route.
     *                       - 'appointmentId': ID of the appointment.
     *                       - 'professionalId': ID of the professional.
     *                       - 'council': council information.
     *                       - 'embed': boolean to embed specific content.
     *                       - 'embedFull': boolean to enable full embed mode.
     *                       - 'navbarEmbed': boolean to enable navbar embedding.
     * @return object The response object containing the generated magic link details.
     * @throws GuzzleException
     */
    public function generateMagicLink(int $id, array $options = []): object
    {
        $options = array_filter(
            array_merge([
                'route' => null,
                'appointmentId' => null,
                'professionalId' => null,
                'council' => null,
                'embed' => null,
                'embedFull' => null,
                'navbarEmbed' => null,
            ], $options)
        );
        $params = !empty($options) ? http_build_query($options) : null;
        $endpoint = "/integration/enterprise/patients/generate-magiclink-access-app/$id?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientListAll
     * Retrieves a paginated list of patients with an optional order parameter.
     *
     * @param int $page The page number to retrieve.
     * @param string|null $order Optional parameter to specify the order of the list. Valid values are 'NAME' or 'ID'.
     * @return object The response object containing the list of patients.
     * @throws GuzzleException
     */
    public function listAll(int $page, ?string $order = null): object
    {
        $order = in_array($order, ['NAME', 'ID']) ? strtoupper($order) : null;
        $params = !empty($order) ? http_build_query(['order' => $order]) : null;
        $endpoint = "/integration/enterprise/patients/list/$page?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/newPatientReport
     * Retrieves a paginated patient report based on the provided options.
     *
     * @param int $page The page number to retrieve.
     * @param array $options Optional filter and display settings for the report, including:
     *       - 'active' (bool): Include active patients.
     *       - 'inactive' (bool): Include inactive patients.
     *       - 'pendent' (bool): Include pendent patients.
     *       - 'blocked' (bool): Include blocked patients.
     *       - 'embed' (bool): Embed additional data in the response.
     *       - 'unlocked' (bool): Include unlocked patients.
     *       - 'navbarEmbed' (bool): Embed navigation bar in the response.
     * @return object The response object containing the report data from the API.
     * @throws GuzzleException
     */
    public function getReport(int $page, array $options = []): object
    {
        $options = array_filter(
            array_merge([
                'active' => false,
                'inactive' => false,
                'pendent' => false,
                'blocked' => false,
                'embed' => false,
                'unlocked' => false,
                'navbarEmbed' => false,
                'page' => $page
            ], $options)
        );
        $params = !empty($options) ? http_build_query($options) : null;
        $endpoint = "/integration/enterprise/patients-report?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/patientPayment
     * Retrieves payment reports for a patient within the specified date range.
     *
     * @param int $id The unique identifier of the patient.
     * @param string $startDate The start date for the report in YYYY-MM-DD format.
     * @param string $endDate The end date for the report in YYYY-MM-DD format.
     * @return object The response object containing the payment report details.
     * @throws GuzzleException
     */
    public function getPayments(int $id, string $startDate, string $endDate): object
    {
        $params = http_build_query([
            'startDate' => $startDate,
            'endDate' => $endDate
        ]);
        $endpoint = "/integration/enterprise/patients-report?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/mensurationByPatientId
     * Retrieves the mensuration data for a specific patient by their unique identifier.
     *
     * @param int $patientId The unique identifier of the patient.
     * @return object The response object containing the patient's mensuration data.
     * @throws GuzzleException
     */
    public function getMensuration(int $patientId): object
    {
        $endpoint = "/integration/enterprise/patients/$patientId/mensurations";
        return $this->call('GET', $endpoint);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/mensurationByFilter
     * Retrieves mensuration data for a specific patient within the given date range.
     *
     * @param string $initialDate The starting date for the mensuration data query (in YYYY-MM-DD format).
     * @param string|null $finalDate The ending date for the mensuration data query (in YYYY-MM-DD format). Optional.
     * @param int|null $patientId The unique identifier of the patient. Optional.
     * @return object The response object containing the queried mensuration data.
     * @throws GuzzleException
     */
    public function getMensurationByDate(string $initialDate, ?string $finalDate = null, ?int $patientId = null): object
    {
        $data = array_filter([
            'initialDate' => $initialDate,
            'finalDate' => $finalDate,
            'patientId' => $patientId
        ]);
        $params = http_build_query($data);
        $endpoint = "/integration/enterprise/patients/$patientId/mensurations?$params";
        return $this->call('GET', $endpoint, $data);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#tag/Paciente/paths/~1integration~1enterprise~1patient~1login/post
     * Authenticates a patient using their email and password credentials.
     *
     * @param int $email The email address of the patient for authentication.
     * @param string $senha The password associated with the patient's email.
     * @return object The response object from the API call.
     * @throws GuzzleException
     */
    public function magicLogin(int $email, string $senha): object
    {
        $endpoint = "/integration/enterprise/patient/login";
        $data = [
            'email' => $email,
            'senha' => $senha,
        ];
        return $this->call('POST', $endpoint, $data);
    }
}