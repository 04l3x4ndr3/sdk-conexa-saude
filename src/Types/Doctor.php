<?php

namespace O4l3x4ndr3\SdkConexa\Types;

use GenreType;

class Doctor extends ProfessionalCommon
{

    public function __construct(int       $id,
                                string    $name,
                                string    $lastname,
                                string    $mail,
                                string    $cellphone,
                                int       $specialtyId,
                                GenreType $sex,
                                bool      $isBrazilian,
                                string    $cpf,
                                string    $crm,
                                string    $crmUf,
                                string    $dateBirth)
    {
        parent::__construct($id,
            $name,
            $lastname,
            $mail,
            $cellphone,
            $specialtyId,
            $sex,
            $isBrazilian,
            $cpf,
            $crm,
            $crmUf,
            $dateBirth);
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
