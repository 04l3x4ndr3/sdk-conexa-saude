<?php

namespace O4l3x4ndr3\SdkConexa\Context;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkConexa\Configuration;
use O4l3x4ndr3\SdkConexa\Helpers\HTTPClient;
use ProfessionalType;

class AppointmentQueue extends HTTPClient
{

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * https://apidocs.conexasaude.com.br/v1/enterprise/index.html#operation/getAppointmentQueueSizeByProfessionalType
     * Retrieves the size of the appointment queue based on the professional type.
     *
     * @param ProfessionalType $professionalType The type of professional to filter the queue size.
     * @return object The response containing the queue size information.
     * @throws GuzzleException
     */
    public function getQueueSizeByProfessionalType(ProfessionalType $professionalType): object
    {
        $params = http_build_query(['ProfessionalType' => $professionalType->value]);
        $endpoint = "/integration/appointment-queue/size?$params";
        return $this->call('GET', $endpoint);
    }
}
