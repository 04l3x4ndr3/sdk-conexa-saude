<?php

namespace O4l3x4ndr3\SdkConexa\Types;

class PatientFamilyGroupRequest
{
    private ?int $id;
    private ?string $name;
    private ?string $mail;
    private ?string $dateBirth;
    private ?string $sex;
    private ?string $cpf;
    private ?string $cellphone;
    private ?int $patientHolderId;
    private ?string $patientHolderCpf;
    private ?string $healthCardNumber;
    private ?string $additionalInformation;
    private ?int $specialist;
    private ?string $nationalId;
    private ?string $kinshipOfTheHolder;
    private ?PatientAddressRequest $address;

    /**
     * @param string|null $name
     * @param string|null $dateBirth
     */
    public function __construct(?string $name, ?string $dateBirth)
    {
        $this->name = $name;
        $this->dateBirth = $dateBirth;

        $this->id = null;
        $this->mail = null;
        $this->sex = null;
        $this->cpf = null;
        $this->cellphone = null;
        $this->patientHolderId = null;
        $this->patientHolderCpf = null;
        $this->healthCardNumber = null;
        $this->additionalInformation = null;
        $this->specialist = null;
        $this->nationalId = null;
        $this->kinshipOfTheHolder = null;
        $this->address = null;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): PatientFamilyGroupRequest
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): PatientFamilyGroupRequest
    {
        $this->name = $name;
        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): PatientFamilyGroupRequest
    {
        $this->mail = $mail;
        return $this;
    }

    public function getDateBirth(): ?string
    {
        return $this->dateBirth;
    }

    public function setDateBirth(?string $dateBirth): PatientFamilyGroupRequest
    {
        $this->dateBirth = $dateBirth;
        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(?string $sex): PatientFamilyGroupRequest
    {
        $this->sex = $sex;
        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(?string $cpf): PatientFamilyGroupRequest
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getCellphone(): ?string
    {
        return $this->cellphone;
    }

    public function setCellphone(?string $cellphone): PatientFamilyGroupRequest
    {
        $this->cellphone = $cellphone;
        return $this;
    }

    public function getPatientHolderId(): ?int
    {
        return $this->patientHolderId;
    }

    public function setPatientHolderId(?int $patientHolderId): PatientFamilyGroupRequest
    {
        $this->patientHolderId = $patientHolderId;
        return $this;
    }

    public function getPatientHolderCpf(): ?string
    {
        return $this->patientHolderCpf;
    }

    public function setPatientHolderCpf(?string $patientHolderCpf): PatientFamilyGroupRequest
    {
        $this->patientHolderCpf = $patientHolderCpf;
        return $this;
    }

    public function getHealthCardNumber(): ?string
    {
        return $this->healthCardNumber;
    }

    public function setHealthCardNumber(?string $healthCardNumber): PatientFamilyGroupRequest
    {
        $this->healthCardNumber = $healthCardNumber;
        return $this;
    }

    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(?string $additionalInformation): PatientFamilyGroupRequest
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    public function getSpecialist(): ?int
    {
        return $this->specialist;
    }

    public function setSpecialist(?int $specialist): PatientFamilyGroupRequest
    {
        $this->specialist = $specialist;
        return $this;
    }

    public function getNationalId(): ?string
    {
        return $this->nationalId;
    }

    public function setNationalId(?string $nationalId): PatientFamilyGroupRequest
    {
        $this->nationalId = $nationalId;
        return $this;
    }

    public function getKinshipOfTheHolder(): ?string
    {
        return $this->kinshipOfTheHolder;
    }

    public function setKinshipOfTheHolder(?string $kinshipOfTheHolder): PatientFamilyGroupRequest
    {
        $this->kinshipOfTheHolder = $kinshipOfTheHolder;
        return $this;
    }

    public function getAddress(): ?PatientAddressRequest
    {
        return $this->address;
    }

    public function setAddress(?PatientAddressRequest $address): PatientFamilyGroupRequest
    {
        $this->address = $address;
        return $this;
    }

    public function toArray(): array
    {
        $vars = get_object_vars($this);
        $vars['address'] = $this->address->toArray();
        return $vars;
    }
}