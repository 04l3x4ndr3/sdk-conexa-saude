<?php

namespace O4l3x4ndr3\SdkConexa\Types;

class PatientRequest
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
    private ?string $kinshipOfTheHolder;
    private ?string $healthCardNumber;
    private ?string $additionalInformation;
    private ?string $passport;
    private ?int $specialist;
    private ?string $nationalId;
    private ?PatientAddressRequest $address;
    private ?string $motherName;
    private ?string $socialName;
    private ?int $idRaceColor;
    private ?int $idNationality;
    private ?string $naturalizationDate;
    private ?string $cns;
    private ?int $idCbo;
    private ?string $religion;
    private ?string $otherReligions;
    private ?string $workplace;
    private ?string $freeObservations;
    private ?bool $unknowMother;
    private ?int $idHomeArea;
    private ?string $homeSituation;
    private ?int $idSchooling;
    private ?bool $socialVulnerability;
    private ?string $ethnicity;
    private ?int $idGender;
    private ?string $birthCounty;
    private ?int $idBirthUF;
    private ?int $idPassportIssuingCountry;
    private ?string $passportIssuingDate;
    private ?string $passportExpiryDate;
    private ?int $idBirthCountry;
    private ?string $kinshipProcurator;
    private ?string $cpfProcurator;
    private ?string $nameProcurator;
    private ?string $identityIssuingDate;
    private ?int $idIdentityUF;
    private ?string $identityIssuingBody;
    private ?string $nisNumber;
    private ?bool $flagAps;
    private ?int $idPlanType;
    private ?string $registration;
    private ?string $healthPlan;
    private ?string $enterprise;
    private ?string $department;
    private ?string $patientRole;

    /**
     * @param string $name
     * @param string|null $mail
     * @param string|null $cpf
     * @param string|null $healthCardNumber
     * @param string|null $registration
     */
    public function __construct(?string $name, ?string $mail, ?string $cpf, ?string $healthCardNumber, ?string $registration)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->cpf = $cpf;
        $this->healthCardNumber = $healthCardNumber;
        $this->registration = $registration;

        $this->id = null;
        $this->dateBirth = null;
        $this->sex = null;
        $this->cellphone = null;
        $this->patientHolderId = null;
        $this->patientHolderCpf = null;
        $this->kinshipOfTheHolder = null;
        $this->additionalInformation = null;
        $this->passport = null;
        $this->specialist = null;
        $this->nationalId = null;
        $this->address = null;
        $this->motherName = null;
        $this->socialName = null;
        $this->idRaceColor = null;
        $this->idNationality = null;
        $this->naturalizationDate = null;
        $this->cns = null;
        $this->idCbo = null;
        $this->religion = null;
        $this->otherReligions = null;
        $this->workplace = null;
        $this->freeObservations = null;
        $this->unknowMother = null;
        $this->idHomeArea = null;
        $this->homeSituation = null;
        $this->idSchooling = null;
        $this->socialVulnerability = null;
        $this->ethnicity = null;
        $this->idGender = null;
        $this->birthCounty = null;
        $this->idBirthUF = null;
        $this->idPassportIssuingCountry = null;
        $this->passportIssuingDate = null;
        $this->passportExpiryDate = null;
        $this->idBirthCountry = null;
        $this->kinshipProcurator = null;
        $this->cpfProcurator = null;
        $this->nameProcurator = null;
        $this->identityIssuingDate = null;
        $this->idIdentityUF = null;
        $this->identityIssuingBody = null;
        $this->nisNumber = null;
        $this->flagAps = null;
        $this->idPlanType = null;
        $this->healthPlan = null;
        $this->enterprise = null;
        $this->department = null;
        $this->patientRole = null;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): PatientRequest
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): PatientRequest
    {
        $this->name = $name;
        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): PatientRequest
    {
        $this->mail = $mail;
        return $this;
    }

    public function getDateBirth(): ?string
    {
        return $this->dateBirth;
    }

    public function setDateBirth(?string $dateBirth): PatientRequest
    {
        $this->dateBirth = $dateBirth;
        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(?string $sex): PatientRequest
    {
        $this->sex = $sex;
        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(?string $cpf): PatientRequest
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getCellphone(): ?string
    {
        return $this->cellphone;
    }

    public function setCellphone(?string $cellphone): PatientRequest
    {
        $this->cellphone = $cellphone;
        return $this;
    }

    public function getPatientHolderId(): ?int
    {
        return $this->patientHolderId;
    }

    public function setPatientHolderId(?int $patientHolderId): PatientRequest
    {
        $this->patientHolderId = $patientHolderId;
        return $this;
    }

    public function getPatientHolderCpf(): ?string
    {
        return $this->patientHolderCpf;
    }

    public function setPatientHolderCpf(?string $patientHolderCpf): PatientRequest
    {
        $this->patientHolderCpf = $patientHolderCpf;
        return $this;
    }

    public function getKinshipOfTheHolder(): ?string
    {
        return $this->kinshipOfTheHolder;
    }

    public function setKinshipOfTheHolder(?string $kinshipOfTheHolder): PatientRequest
    {
        $this->kinshipOfTheHolder = $kinshipOfTheHolder;
        return $this;
    }

    public function getHealthCardNumber(): ?string
    {
        return $this->healthCardNumber;
    }

    public function setHealthCardNumber(?string $healthCardNumber): PatientRequest
    {
        $this->healthCardNumber = $healthCardNumber;
        return $this;
    }

    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(?string $additionalInformation): PatientRequest
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    public function getPassport(): ?string
    {
        return $this->passport;
    }

    public function setPassport(?string $passport): PatientRequest
    {
        $this->passport = $passport;
        return $this;
    }

    public function getSpecialist(): ?int
    {
        return $this->specialist;
    }

    public function setSpecialist(?int $specialist): PatientRequest
    {
        $this->specialist = $specialist;
        return $this;
    }

    public function getNationalId(): ?string
    {
        return $this->nationalId;
    }

    public function setNationalId(?string $nationalId): PatientRequest
    {
        $this->nationalId = $nationalId;
        return $this;
    }

    public function getAddress(): ?PatientAddressRequest
    {
        return $this->address;
    }

    public function setAddress(?PatientAddressRequest $address): PatientRequest
    {
        $this->address = $address;
        return $this;
    }

    public function getMotherName(): ?string
    {
        return $this->motherName;
    }

    public function setMotherName(?string $motherName): PatientRequest
    {
        $this->motherName = $motherName;
        return $this;
    }

    public function getSocialName(): ?string
    {
        return $this->socialName;
    }

    public function setSocialName(?string $socialName): PatientRequest
    {
        $this->socialName = $socialName;
        return $this;
    }

    public function getIdRaceColor(): ?int
    {
        return $this->idRaceColor;
    }

    public function setIdRaceColor(?int $idRaceColor): PatientRequest
    {
        $this->idRaceColor = $idRaceColor;
        return $this;
    }

    public function getIdNationality(): ?int
    {
        return $this->idNationality;
    }

    public function setIdNationality(?int $idNationality): PatientRequest
    {
        $this->idNationality = $idNationality;
        return $this;
    }

    public function getNaturalizationDate(): ?string
    {
        return $this->naturalizationDate;
    }

    public function setNaturalizationDate(?string $naturalizationDate): PatientRequest
    {
        $this->naturalizationDate = $naturalizationDate;
        return $this;
    }

    public function getCns(): ?string
    {
        return $this->cns;
    }

    public function setCns(?string $cns): PatientRequest
    {
        $this->cns = $cns;
        return $this;
    }

    public function getIdCbo(): ?int
    {
        return $this->idCbo;
    }

    public function setIdCbo(?int $idCbo): PatientRequest
    {
        $this->idCbo = $idCbo;
        return $this;
    }

    public function getReligion(): ?string
    {
        return $this->religion;
    }

    public function setReligion(?string $religion): PatientRequest
    {
        $this->religion = $religion;
        return $this;
    }

    public function getOtherReligions(): ?string
    {
        return $this->otherReligions;
    }

    public function setOtherReligions(?string $otherReligions): PatientRequest
    {
        $this->otherReligions = $otherReligions;
        return $this;
    }

    public function getWorkplace(): ?string
    {
        return $this->workplace;
    }

    public function setWorkplace(?string $workplace): PatientRequest
    {
        $this->workplace = $workplace;
        return $this;
    }

    public function getFreeObservations(): ?string
    {
        return $this->freeObservations;
    }

    public function setFreeObservations(?string $freeObservations): PatientRequest
    {
        $this->freeObservations = $freeObservations;
        return $this;
    }

    public function isUnknowMother(): ?bool
    {
        return $this->unknowMother;
    }

    public function setUnknowMother(?bool $unknowMother): PatientRequest
    {
        $this->unknowMother = $unknowMother;
        return $this;
    }

    public function getIdHomeArea(): ?int
    {
        return $this->idHomeArea;
    }

    public function setIdHomeArea(?int $idHomeArea): PatientRequest
    {
        $this->idHomeArea = $idHomeArea;
        return $this;
    }

    public function getHomeSituation(): ?string
    {
        return $this->homeSituation;
    }

    public function setHomeSituation(?string $homeSituation): PatientRequest
    {
        $this->homeSituation = $homeSituation;
        return $this;
    }

    public function getIdSchooling(): ?int
    {
        return $this->idSchooling;
    }

    public function setIdSchooling(?int $idSchooling): PatientRequest
    {
        $this->idSchooling = $idSchooling;
        return $this;
    }

    public function isSocialVulnerability(): ?bool
    {
        return $this->socialVulnerability;
    }

    public function setSocialVulnerability(?bool $socialVulnerability): PatientRequest
    {
        $this->socialVulnerability = $socialVulnerability;
        return $this;
    }

    public function getEthnicity(): ?string
    {
        return $this->ethnicity;
    }

    public function setEthnicity(?string $ethnicity): PatientRequest
    {
        $this->ethnicity = $ethnicity;
        return $this;
    }

    public function getIdGender(): ?int
    {
        return $this->idGender;
    }

    public function setIdGender(?int $idGender): PatientRequest
    {
        $this->idGender = $idGender;
        return $this;
    }

    public function getBirthCounty(): ?string
    {
        return $this->birthCounty;
    }

    public function setBirthCounty(?string $birthCounty): PatientRequest
    {
        $this->birthCounty = $birthCounty;
        return $this;
    }

    public function getIdBirthUF(): ?int
    {
        return $this->idBirthUF;
    }

    public function setIdBirthUF(?int $idBirthUF): PatientRequest
    {
        $this->idBirthUF = $idBirthUF;
        return $this;
    }

    public function getIdPassportIssuingCountry(): ?int
    {
        return $this->idPassportIssuingCountry;
    }

    public function setIdPassportIssuingCountry(?int $idPassportIssuingCountry): PatientRequest
    {
        $this->idPassportIssuingCountry = $idPassportIssuingCountry;
        return $this;
    }

    public function getPassportIssuingDate(): ?string
    {
        return $this->passportIssuingDate;
    }

    public function setPassportIssuingDate(?string $passportIssuingDate): PatientRequest
    {
        $this->passportIssuingDate = $passportIssuingDate;
        return $this;
    }

    public function getPassportExpiryDate(): ?string
    {
        return $this->passportExpiryDate;
    }

    public function setPassportExpiryDate(?string $passportExpiryDate): PatientRequest
    {
        $this->passportExpiryDate = $passportExpiryDate;
        return $this;
    }

    public function getIdBirthCountry(): ?int
    {
        return $this->idBirthCountry;
    }

    public function setIdBirthCountry(?int $idBirthCountry): PatientRequest
    {
        $this->idBirthCountry = $idBirthCountry;
        return $this;
    }

    public function getKinshipProcurator(): ?string
    {
        return $this->kinshipProcurator;
    }

    public function setKinshipProcurator(?string $kinshipProcurator): PatientRequest
    {
        $this->kinshipProcurator = $kinshipProcurator;
        return $this;
    }

    public function getCpfProcurator(): ?string
    {
        return $this->cpfProcurator;
    }

    public function setCpfProcurator(?string $cpfProcurator): PatientRequest
    {
        $this->cpfProcurator = $cpfProcurator;
        return $this;
    }

    public function getNameProcurator(): ?string
    {
        return $this->nameProcurator;
    }

    public function setNameProcurator(?string $nameProcurator): PatientRequest
    {
        $this->nameProcurator = $nameProcurator;
        return $this;
    }

    public function getIdentityIssuingDate(): ?string
    {
        return $this->identityIssuingDate;
    }

    public function setIdentityIssuingDate(?string $identityIssuingDate): PatientRequest
    {
        $this->identityIssuingDate = $identityIssuingDate;
        return $this;
    }

    public function getIdIdentityUF(): ?int
    {
        return $this->idIdentityUF;
    }

    public function setIdIdentityUF(?int $idIdentityUF): PatientRequest
    {
        $this->idIdentityUF = $idIdentityUF;
        return $this;
    }

    public function getIdentityIssuingBody(): ?string
    {
        return $this->identityIssuingBody;
    }

    public function setIdentityIssuingBody(?string $identityIssuingBody): PatientRequest
    {
        $this->identityIssuingBody = $identityIssuingBody;
        return $this;
    }

    public function getNisNumber(): ?string
    {
        return $this->nisNumber;
    }

    public function setNisNumber(?string $nisNumber): PatientRequest
    {
        $this->nisNumber = $nisNumber;
        return $this;
    }

    public function isFlagAps(): ?bool
    {
        return $this->flagAps;
    }

    public function setFlagAps(?bool $flagAps): PatientRequest
    {
        $this->flagAps = $flagAps;
        return $this;
    }

    public function getIdPlanType(): ?int
    {
        return $this->idPlanType;
    }

    public function setIdPlanType(?int $idPlanType): PatientRequest
    {
        $this->idPlanType = $idPlanType;
        return $this;
    }

    public function getRegistration(): ?string
    {
        return $this->registration;
    }

    public function setRegistration(?string $registration): PatientRequest
    {
        $this->registration = $registration;
        return $this;
    }

    public function getHealthPlan(): ?string
    {
        return $this->healthPlan;
    }

    public function setHealthPlan(?string $healthPlan): PatientRequest
    {
        $this->healthPlan = $healthPlan;
        return $this;
    }

    public function getEnterprise(): ?string
    {
        return $this->enterprise;
    }

    public function setEnterprise(?string $enterprise): PatientRequest
    {
        $this->enterprise = $enterprise;
        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): PatientRequest
    {
        $this->department = $department;
        return $this;
    }

    public function getPatientRole(): ?string
    {
        return $this->patientRole;
    }

    public function setPatientRole(?string $patientRole): PatientRequest
    {
        $this->patientRole = $patientRole;
        return $this;
    }

    public function toArray(): array
    {
        $vars = get_object_vars($this);
        $vars['address'] = $this->address->toArray();
        return $vars;
    }
}