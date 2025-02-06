<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Types\PatientRequest;
use O4l3x4ndr3\SdkConexa\Types\ProfessionalRequest;

class Appointment extends HTTPClient
{

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @links @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2AppointmentById
     * Retrieves an appointment by its ID and professional type.
     *
     * @param int $id The unique identifier of the appointment.
     * @param string $professionalType The professional type associated with the appointment.
     * @return object The appointment details as an object.
     * @throws GuzzleException
     */
    public function getById(int $id, string $professionalType): object
    {
        $params = http_build_query(['ProfessionalType' => $professionalType]);
        $endpoint = "/integration/enterprise/v2/appointment/$id?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentUrlById
     * Retrieves the URL associated with a specific appointment.
     *
     * @param int $id The ID of the appointment for which the URL is being requested.
     * @return object An object containing the details of the appointment URL.
     * @throws GuzzleException
     */
    public function getUrlById(int $id): object
    {
        $endpoint = "/integration/enterprise/v2/appointment/$id/url";
        return $this->call('GET', $endpoint);
    }


    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentSaveMedicalRecord
     * Saves the medical record associated with a specific appointment.
     *
     * @param int $id The ID of the appointment for which the medical record is being saved.
     * @param array $medicalRecordData An associative array containing the medical record data.
     *                      The keys may include "historyPhysicalExamination", "prescription",
     *                      "previousDiagnosis", and "screening".
     * @return object An object containing the result of the medical record save operation.
     * @throws GuzzleException
     */
    public function saveMedicalRecord(int $id, array $medicalRecordData): object
    {
        $defaultData = array_merge([
            "historyPhysicalExamination" => null,
            "prescription" => null,
            "previousDiagnosis" => null,
            "screening" => null,
        ], $medicalRecordData);
        $endpoint = "/integration/enterprise/appointment/saveMedicalReport/$id";
        return $this->call('POST', $endpoint, $defaultData);
    }


    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2AllAppointmentByPatientId
     * Retrieves last 50 appointments associated with a specific patient and filtered by professional type.
     *
     * @param int $patientId The ID of the patient whose appointments are being retrieved.
     * @param string $professionalType An instance representing the type of professional (e.g., doctor, nurse) to filter the results.
     * @return object An object containing the list of appointments for the specified patient and professional type.
     * @throws GuzzleException
     */
    public function getAllByPatientId(int $patientId, string $professionalType): object
    {
        $params = http_build_query(['ProfessionalType' => $professionalType]);
        $endpoint = "/integration/enterprise/v2/appointment/all/$patientId?$params";
        return $this->call('GET', $endpoint);
    }


    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2NextAppointmentByPatientId
     * Retrieves the next PENDENTS appointment for a specific patient based on their patient ID.
     *
     * @param int $patientId The unique identifier of the patient whose next appointment is being retrieved.
     * @return object An object containing the details of the next appointment for the specified patient.
     * @throws GuzzleException
     */
    public function getNextByPatientId(int $patientId): object
    {
        $endpoint = "/integration/enterprise/v2/appointment/next/$patientId";
        return $this->call('GET', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2realizedAppointmentByPatientId
     * Retrieves the realized appointments for a specific patient by their ID, filtered by the type of professional.
     *
     * @param int $patientId The ID of the patient whose realized appointments are being retrieved.
     * @param string $professionalType The type of professional to filter the appointments by.
     * @return object An object containing the details of the realized appointments.
     * @throws GuzzleException
     */
    public function getRealizedByPatientId(int $patientId, string $professionalType): object
    {
        $params = http_build_query(['ProfessionalType' => $professionalType]);
        $endpoint = "/integration/enterprise/v2/appointment/realized/$patientId?$params";
        return $this->call('GET', $endpoint);
    }


    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/createAppointmentImmediate
     * Creates an immediate appointment for a patient with optional parameters for customization.
     *
     * @param int $patientId The ID of the patient for whom the immediate appointment is being created.
     * @param array $appointmentDetails An associative array of optional parameters, which may include:
     *                        - "patientId": int|null (Default null)
     *                        - "specialtyId": int|null (Default null)
     *                        - "payment": array|null, containing "creditCardId" (Default null)
     *                        - "ProfessionalType": string|null (Enum of valid professional types, Default null)
     *                        - "symptoms": array (Default empty array)
     *                        - "medicines": array (Default empty array)
     *                        - "screening": string (Default null)
     * @return object An object containing the result of the immediate appointment creation.
     * @throws GuzzleException
     */
    public function createImmediate(int $patientId, array $appointmentDetails = []): object
    {
        $defaultData = array_merge([
            "patientId" => $patientId,
            "specialtyId" => null,
            "payment" => null, // [creditCardId]
            "ProfessionalType" => null, // [enum ProfessionalType]
            "symptoms" => [],
            "medicines" => [],
            "screening" => null
        ], $appointmentDetails);
        $endpoint = "/integration/enterprise/appointment/immediate";
        return $this->call('POST', $endpoint, $defaultData);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentImmediateAttachFile
     * Attaches a file immediately to a specific appointment protocol.
     *
     * @param int $idProtocol The ID of the protocol to which the file is being attached.
     * @param array $fileData An associative array containing the details of the file to be attached.
     *                      The keys may include:
     *                      - "base64Content" (required): The base64-encoded content of the file.
     *                      - "describe" (optional): A description of the attached file.
     *                      - "extension" (required): The file extension (e.g., pdf, jpg).
     *                      - "tipoAnexoSibs" (optional): The type of attachment, specific to SIBs.
     *                      - "dataExame" (optional): The date of the exam associated with the attachment.
     * @return object An object containing the result of the file attachment operation.
     * @throws GuzzleException
     */
    public function immediateAttachFile(int $idProtocol, array $fileData): object
    {
        $defaultData = array_merge([
            "base64Content" => null, // required
            "extension" => null, // required
            "describe" => null, // optional
            "tipoAnexoSibs" => null, // optional
            "dataExame" => null, // optional
        ], $fileData);
        $endpoint = "/integration/enterprise/appointment/immediate/attach-file/$idProtocol";
        return $this->call('POST', $endpoint, $defaultData);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentAttachFile
     * Attaches a file to a specific appointment record.
     *
     * @param int $appointmentId The ID of the appointment to which the file is being attached.
     * @param array $fileData An associative array containing the file details. The keys may include:
     *                        - "conteudoBase64" (string, required): The file content encoded in Base64.
     *                        - "legenda" (string, optional): A description or caption for the attachment.
     *                        - "nomeExtensao" (string, required): The name and extension of the file.
     *                        - "tipoAnexoSibs" (string, optional): The type of attachment, following the SibsType Enum.
     *                        - "dataExame" (string, optional): The date of the examination related to the attachment.
     * @return object An object containing the result of the file attachment operation.
     * @throws GuzzleException
     */
    public function attachFile(int $appointmentId, array $fileData): object
    {
        $defaultData = array_merge([
            "conteudoBase64" => null, // required
            "legenda" => null, //optional
            "nomeExtensao" => null, // required
            "tipoAnexoSibs" => null, //optional (SibsType Enum)
            "dataExame" => null,//optional
        ], $fileData);
        $endpoint = "/integration/enterprise/appointment/upload/attachment/$appointmentId";
        return $this->call('POST', $endpoint, $defaultData);
    }


    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentImmediateActiveByPatientId
     * Retrieves the immediate active appointment associated with a specific patient.
     *
     * @param int $patientId The ID of the patient whose immediate active appointment is being retrieved.
     * @return object An object containing the details of the immediate active appointment.
     * @throws GuzzleException
     */
    public function getImmediateActiveByPatientId(int $patientId): object
    {
        $endpoint = "/integration/enterprise/appointment/immediate/active/$patientId";
        return $this->call('GET', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentImmediateCancelByPatientId
     * Cancels an immediate appointment associated with a specific patient ID.
     *
     * @param int $patientId The ID of the patient whose immediate appointment is being canceled.
     * @return object An object containing the result of the cancellation operation.
     * @throws GuzzleException
     */
    public function cancelImmediateByPatientId(int $patientId): object
    {
        $endpoint = "/integration/enterprise/appointment/immediate/cancel/$patientId";
        return $this->call('POST', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2AppointmentLastCallByPatientId
     * Retrieves the last call information for a patient's appointment.
     *
     * @param int $patientId The ID of the patient whose last appointment call information is being retrieved.
     * @return object An object containing the details of the last call associated with the patient's appointment.
     * @throws GuzzleException
     */
    public function getLastCallByPatientId(int $patientId): object
    {
        $endpoint = "/integration/enterprise/v2/appointment/last/call/$patientId";
        return $this->call('GET', $endpoint);
    }


    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentOutcomes
     * Retrieves a list of appointment outcomes from the system.
     *
     * @return object An object containing the list of appointment outcomes and their details.
     * @throws GuzzleException
     */
    public function getOutcomes(): object
    {
        $endpoint = "/integration/enterprise/appointment/outcomes";
        return $this->call('GET', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentReport
     * Retrieves a report of appointments within a specified date range.
     *
     * @param string $startDate The start date for the report in the format 'YYYY-MM-DD'.
     * @param string $endDate The end date for the report in the format 'YYYY-MM-DD'.
     * @param array $optional An associative array of optional query parameters to refine the report.
     * @return object An object containing the appointment report data.
     * @throws GuzzleException
     */
    public function getReport(string $startDate, string $endDate, array $optional = []): object
    {
        $params = http_build_query(
            array_filter(
                array_merge([
                    'startDate' => $startDate,
                    'endDate' => $endDate
                ], $optional)
            )
        );
        $endpoint = "/integration/enterprise/appointment/report?{$params}";
        return $this->call('GET', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/AppointmentScheduledWithoutSpecialistReport
     * Retrieves a list of appointments scheduled without a specialist's report within a specified date range.
     *
     * @param string $startDate The start date of the range (format: YYYY-MM-DD) to filter appointments.
     * @param string $endDate The end date of the range (format: YYYY-MM-DD) to filter appointments.
     * @param int|null $page Optional parameter for pagination, specifying the page number.
     * @return object An object containing the results of the query for appointments without specialist reports.
     * @throws GuzzleException
     */
    public function getScheduledWithoutSpecialistReport(string $startDate, string $endDate, ?int $page = null): object
    {
        $params = http_build_query(
            array_filter([
                'startDate' => $startDate,
                'endDate' => $endDate,
                'page' => $page
            ])
        );
        $endpoint = "/integration/enterprise/appointment/report?{$params}";
        return $this->call('GET', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentSymptoms
     * Retrieves the list of symptoms associated with an appointment.
     *
     * @return object An object containing the list of symptoms.
     * @throws GuzzleException
     */
    public function getSymptoms(): object
    {
        $endpoint = "/integration/enterprise/appointment/symptoms";
        return $this->call('GET', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentUrlCall
     * Retrieves the URL for a specific call associated with an appointment.
     *
     * @param int $callId The ID of the call for which the URL is being retrieved.
     * @return object An object containing the URL details of the specified call.
     * @throws GuzzleException
     */
    public function getUrlCall(int $callId): object
    {
        $endpoint = "/integration/enterprise/appointment/url/call/$callId";
        return $this->call('GET', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentConclude
     * Concludes an appointment with the specified outcome and optional data.
     *
     * @param int $appointmentId The ID of the appointment being concluded.
     * @param string $outcome The outcome of the concluded appointment.
     * @param array $optionalData Additional optional data. Keys may include:
     *                     "patientOrientation" and "screening".
     * @return object An object containing the result of the appointment conclusion operation.
     * @throws GuzzleException
     */
    public function conclude(int $appointmentId, string $outcome, array $optionalData = []): object
    {
        $data = array_filter(
            array_merge(
                [
                    'appointmentId' => $appointmentId,
                    'outcome' => $outcome,
                    'patientOrientation' => null,
                    'screening' => null,
                ],
                $optionalData
            )
        );
        $endpoint = "/integration/enterprise/appointment/conclude";
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentConcludeById
     * Concludes an appointment identified by the given ID.
     *
     * @param int $id The ID of the appointment to be concluded.
     * @return object An object containing the result of the appointment conclusion operation.
     * @throws GuzzleException
     */
    public function concludeById(int $id): object
    {
        $endpoint = "/integration/enterprise/appointment/conclude/$id";
        return $this->call('POST', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentConcludeById
     * Cancels a scheduled appointment by providing relevant details such as appointment ID, patient ID, and protocol ID.
     * Additionally, it determines whether to notify the clinic of this cancellation.
     *
     * @param int $appointmentId The ID of the scheduled appointment to be canceled.
     * @param int $patientId The ID of the patient whose appointment is being canceled.
     * @param string|null $protocolId The protocol ID associated with the appointment, if available.
     * @param string $professionalType The type of professional involved in the appointment.
     * @param bool $notifyClinic Indicates whether the clinic should be notified of the cancellation. Defaults to false.
     * @return object An object containing the result of the appointment cancellation operation.
     * @throws GuzzleException
     */
    public function cancelScheduled(int $appointmentId, int $patientId, ?string $protocolId, string $professionalType, bool $notifyClinic = false): object
    {
        $params = http_build_query(['professionalType' => $professionalType]);
        $data = array_filter([
            'appointmentId' => $appointmentId,
            'patientId' => $patientId,
            'protocolId' => $protocolId ?? null
        ]);
        $endpoint = "/integration/enterprise/appointment/conclude?$params";
        $extraHeaders = [
            'notifyClinic' => $notifyClinic
        ];
        return $this->call('POST', $endpoint, $data, $extraHeaders);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentScheduledComplete
     * Marks an appointment as complete by providing all relevant details.
     *
     * @param string $appointmentDate The scheduled date of the appointment in ISO-8601 format.
     * @param ProfessionalRequest $doctor An instance of the Doctor class representing the attending doctor.
     * @param PatientRequest $patient An instance of the Patient class representing the associated patient.
     * @param array $optionalData An associative array containing optional appointment-related data.
     *                      Possible keys may include "historyPhysicalExamination",
     *                      "prescription", "previousDiagnosis", "screening", and "payment".
     * @return object An object containing the result of the appointment completion operation.
     * @throws GuzzleException
     */
    public function scheduledComplete(string $appointmentDate, ProfessionalRequest $doctor, PatientRequest $patient, array $optionalData = []): object
    {
        $data = array_filter(
            array_merge([
                'appointmentDate' => $appointmentDate,
                'doctor' => $doctor->toArray(),
                'patient' => $patient->toArray(),
                'historyPhysicalExamination' => null,
                'prescription' => null,
                'previousDiagnosis' => null,
                'screening' => null,
                'payment' => null, //[creditCardId]
            ], $optionalData)
        );
        $endpoint = "/integration/enterprise/appointment/scheduled/complete";
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentScheduledSemiComplete
     * Schedules a semi-complete appointment with the necessary details and optional additional data.
     *
     * @param string $doctorCpf The CPF of the doctor associated with the appointment.
     * @param string $appointmentDate The date of the appointment in the format 'YYYY-MM-DD'.
     * @param PatientRequest $patient An instance of the Patient class representing details of the patient.
     * @param array $optionalData An associative array containing optional data for the appointment.
     *                     Possible keys include "payment" (e.g., creditCardId), "previousDiagnosis",
     *                     "historyPhysicalExamination", "screening", and "prescription".
     * @return object An object containing the result of the scheduled semi-complete appointment operation.
     * @throws GuzzleException
     */
    public function scheduledSemiComplete(string $doctorCpf, string $appointmentDate, PatientRequest $patient, array $optionalData = []): object
    {
        $data = array_filter(
            array_merge([
                'appointmentDate' => $appointmentDate,
                'doctorCpf' => $doctorCpf,
                'patient' => $patient->toArray(),
                'payment' => null, //[creditCardId],
                'previousDiagnosis' => null,
                'historyPhysicalExamination' => null,
                'screening' => null,
                'prescription' => null,

            ], $optionalData)
        );
        $endpoint = "/integration/enterprise/appointment/scheduled/semi-complete";
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/createAppointmentScheduledWithoutSpecialist
     * Schedules an appointment without specifying a specialist.
     *
     * @param int $patientId The ID of the patient for whom the appointment is being scheduled.
     * @param string $dateTimeAppointment The date and time of the appointment in a formatted string.
     * @param array|null $optionalData An associative array containing optional data for the appointment.
     *                      This may include keys such as "specialistType" and "specialtyId".
     * @return object An object containing the result of the scheduling operation.
     * @throws GuzzleException
     */
    public function scheduledWithoutSpecialist(int $patientId, string $dateTimeAppointment, ?array $optionalData = []): object
    {
        $data = array_filter(
            array_merge([
                'patientId' => $patientId,
                'dateTimeAppointment' => $dateTimeAppointment,
                'specialistType' => null,
                'specialtyId' => null,
            ], $optionalData)
        );
        $endpoint = "/appointment/scheduled/without-specialist";
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * Schedules a simple appointment for a patient with a specific doctor.
     * @links @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2AppointmentScheduledSimple
     * @param string $professionalType The type of professional associated with the appointment.
     * @param string $appointmentDate The date and time for the appointment in a valid datetime format.
     * @param int $doctorId The ID of the doctor who will conduct the appointment.
     * @param int $patientId The ID of the patient for whom the appointment is being scheduled.
     * @param array $optionalData An optional associative array containing additional appointment details.
     *                      The keys may include "historyPhysicalExamination", "prescription",
     *                      "previousDiagnosis", "screening", and "payment".
     * @return object An object containing the result of the scheduling operation.
     * @throws GuzzleException
     */
    public function scheduledSimple(string $professionalType, string $appointmentDate, int $doctorId, int $patientId, array $optionalData = []): object
    {
        $params = http_build_query(['professionalType' => $professionalType]);
        $data = array_filter(
            array_merge([
                'appointmentDate' => $appointmentDate,
                'doctorId' => $doctorId,
                'patientId' => $patientId,
                'historyPhysicalExamination' => null,
                'prescription' => null,
                'previousDiagnosis' => null,
                'screening' => null,
                'payment' => null, // [creditCardId]
            ], $optionalData)
        );
        $endpoint = "/integration/enterprise/v2/appointment/scheduled/simple?$params";
        return $this->call('POST', $endpoint, $data);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/medicinesByName
     * Retrieves a list of medicines based on the provided name.
     *
     * @param string $name The name or partial name of the medicine to search for.
     * @return object An object containing the list of medicines that match the search criteria.
     * @throws GuzzleException
     */
    public function getMedicinesByName(string $name): object
    {
        $endpoint = "/integration/enterprise/appointment/medicines/$name";
        return $this->call('GET', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentSpecialties
     * Retrieves the list of available specialties for appointments.
     *
     * @return object An object containing the list of specialties for appointments.
     * @throws GuzzleException
     */
    public function getSpecialties(): object
    {
        $endpoint = "/integration/enterprise/appointment/specialties";
        return $this->call('GET', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentCallReport
     * Retrieves the call report for a specified date range and page number.
     *
     * @param int $page The page number to retrieve from the call report.
     * @param string $startDate The start date of the date range for the call report, in "YYYY-MM-DD" format.
     * @param string $endDate The end date of the date range for the call report, in "YYYY-MM-DD" format.
     * @return object An object containing the data of the requested call report.
     * @throws GuzzleException
     */
    public function getCallReport(int $page, string $startDate, string $endDate): object
    {
        $params = http_build_query([
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
        $endpoint = "/integration/enterprise/appointment/calls/report/$page?$params";
        return $this->call('GET', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/appointmentPrescriptionsAmount
     * Retrieves the amount of prescriptions associated with a specific appointment.
     *
     * @param int $appointmentID The ID of the appointment for which the prescription amount is being retrieved.
     * @return object An object containing the information about the prescription amount.
     * @throws GuzzleException
     */
    public function getPrescriptionsAmount(int $appointmentID): object
    {
        $endpoint = "/integration/enterprise/appointment/prescriptions/amount/$appointmentID";
        return $this->call('GET', $endpoint);
    }

    /**
     * @links https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/v2AppointmentResendPrescriptions
     * Resends the prescriptions associated with a specific appointment.
     *
     * @param int $appointmentID The ID of the appointment whose prescriptions are being resent.
     * @return object An object containing the result of the resend operation.
     * @throws GuzzleException
     */
    public function resendPrescriptions(int $appointmentID): object
    {
        $endpoint = "/integration/enterprise/v2/appointment/resend/prescriptions/$appointmentID";
        return $this->call('POST', $endpoint);
    }
}
