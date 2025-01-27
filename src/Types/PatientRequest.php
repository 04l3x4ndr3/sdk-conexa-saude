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

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return $this
     */
    public function setId(?int $id): PatientRequest
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return $this
     */
    public function setName(?string $name): PatientRequest
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @param string|null $mail
     * @return $this
     */
    public function setMail(?string $mail): PatientRequest
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateBirth(): ?string
    {
        return $this->dateBirth;
    }

    /**
     * @param string|null $dateBirth
     * @return $this
     */
    public function setDateBirth(?string $dateBirth): PatientRequest
    {
        $this->dateBirth = $dateBirth;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSex(): ?string
    {
        return $this->sex;
    }

    /**
     * @param string|null $sex
     * @return $this
     */
    public function setSex(?string $sex): PatientRequest
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    /**
     * @param string|null $cpf
     * @return $this
     */
    public function setCpf(?string $cpf): PatientRequest
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCellphone(): ?string
    {
        return $this->cellphone;
    }

    /**
     * @param string|null $cellphone
     * @return $this
     */
    public function setCellphone(?string $cellphone): PatientRequest
    {
        $this->cellphone = $cellphone;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPatientHolderId(): ?int
    {
        return $this->patientHolderId;
    }

    /**
     * @param int|null $patientHolderId
     * @return $this
     */
    public function setPatientHolderId(?int $patientHolderId): PatientRequest
    {
        $this->patientHolderId = $patientHolderId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPatientHolderCpf(): ?string
    {
        return $this->patientHolderCpf;
    }

    /**
     * @param string|null $patientHolderCpf
     * @return $this
     */
    public function setPatientHolderCpf(?string $patientHolderCpf): PatientRequest
    {
        $this->patientHolderCpf = $patientHolderCpf;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKinshipOfTheHolder(): ?string
    {
        return $this->kinshipOfTheHolder;
    }

    /**
     * @param string|null $kinshipOfTheHolder
     * @return $this
     */
    public function setKinshipOfTheHolder(?string $kinshipOfTheHolder): PatientRequest
    {
        $this->kinshipOfTheHolder = $kinshipOfTheHolder;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHealthCardNumber(): ?string
    {
        return $this->healthCardNumber;
    }

    /**
     * @param string|null $healthCardNumber
     * @return $this
     */
    public function setHealthCardNumber(?string $healthCardNumber): PatientRequest
    {
        $this->healthCardNumber = $healthCardNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    /**
     * @param string|null $additionalInformation
     * @return $this
     */
    public function setAdditionalInformation(?string $additionalInformation): PatientRequest
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassport(): ?string
    {
        return $this->passport;
    }

    /**
     * @param string|null $passport
     * @return $this
     */
    public function setPassport(?string $passport): PatientRequest
    {
        $this->passport = $passport;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSpecialist(): ?int
    {
        return $this->specialist;
    }

    /**
     * @param int|null $specialist
     * @return $this
     */
    public function setSpecialist(?int $specialist): PatientRequest
    {
        $this->specialist = $specialist;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNationalId(): ?string
    {
        return $this->nationalId;
    }

    /**
     * @param string|null $nationalId
     * @return $this
     */
    public function setNationalId(?string $nationalId): PatientRequest
    {
        $this->nationalId = $nationalId;
        return $this;
    }

    /**
     * @return PatientAddressRequest|null
     */
    public function getAddress(): ?PatientAddressRequest
    {
        return $this->address;
    }

    /**
     * @param PatientAddressRequest|null $address
     * @return $this
     */
    public function setAddress(?PatientAddressRequest $address): PatientRequest
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMotherName(): ?string
    {
        return $this->motherName;
    }

    /**
     * @param string|null $motherName
     * @return $this
     */
    public function setMotherName(?string $motherName): PatientRequest
    {
        $this->motherName = $motherName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSocialName(): ?string
    {
        return $this->socialName;
    }

    /**
     * @param string|null $socialName
     * @return $this
     */
    public function setSocialName(?string $socialName): PatientRequest
    {
        $this->socialName = $socialName;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdRaceColor(): ?int
    {
        return $this->idRaceColor;
    }

    /**
     * @param int|null $idRaceColor
     * @return $this
     */
    public function setIdRaceColor(?int $idRaceColor): PatientRequest
    {
        $this->idRaceColor = $idRaceColor;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdNationality(): ?int
    {
        return $this->idNationality;
    }

    /**
     * @param int|null $idNationality
     * @return $this
     */
    public function setIdNationality(?int $idNationality): PatientRequest
    {
        $this->idNationality = $idNationality;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNaturalizationDate(): ?string
    {
        return $this->naturalizationDate;
    }

    /**
     * @param string|null $naturalizationDate
     * @return $this
     */
    public function setNaturalizationDate(?string $naturalizationDate): PatientRequest
    {
        $this->naturalizationDate = $naturalizationDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCns(): ?string
    {
        return $this->cns;
    }

    /**
     * @param string|null $cns
     * @return $this
     */
    public function setCns(?string $cns): PatientRequest
    {
        $this->cns = $cns;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdCbo(): ?int
    {
        return $this->idCbo;
    }

    /**
     * @param int|null $idCbo
     * @return $this
     */
    public function setIdCbo(?int $idCbo): PatientRequest
    {
        $this->idCbo = $idCbo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReligion(): ?string
    {
        return $this->religion;
    }

    /**
     * @param string|null $religion
     * @return $this
     */
    public function setReligion(?string $religion): PatientRequest
    {
        $this->religion = $religion;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOtherReligions(): ?string
    {
        return $this->otherReligions;
    }

    /**
     * @param string|null $otherReligions
     * @return $this
     */
    public function setOtherReligions(?string $otherReligions): PatientRequest
    {
        $this->otherReligions = $otherReligions;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWorkplace(): ?string
    {
        return $this->workplace;
    }

    /**
     * @param string|null $workplace
     * @return $this
     */
    public function setWorkplace(?string $workplace): PatientRequest
    {
        $this->workplace = $workplace;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFreeObservations(): ?string
    {
        return $this->freeObservations;
    }

    /**
     * @param string|null $freeObservations
     * @return $this
     */
    public function setFreeObservations(?string $freeObservations): PatientRequest
    {
        $this->freeObservations = $freeObservations;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isUnknowMother(): ?bool
    {
        return $this->unknowMother;
    }

    /**
     * @param bool|null $unknowMother
     * @return $this
     */
    public function setUnknowMother(?bool $unknowMother): PatientRequest
    {
        $this->unknowMother = $unknowMother;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdHomeArea(): ?int
    {
        return $this->idHomeArea;
    }

    /**
     * @param int|null $idHomeArea
     * @return $this
     */
    public function setIdHomeArea(?int $idHomeArea): PatientRequest
    {
        $this->idHomeArea = $idHomeArea;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHomeSituation(): ?string
    {
        return $this->homeSituation;
    }

    /**
     * @param string|null $homeSituation
     * @return $this
     */
    public function setHomeSituation(?string $homeSituation): PatientRequest
    {
        $this->homeSituation = $homeSituation;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdSchooling(): ?int
    {
        return $this->idSchooling;
    }

    /**
     * @param int|null $idSchooling
     * @return $this
     */
    public function setIdSchooling(?int $idSchooling): PatientRequest
    {
        $this->idSchooling = $idSchooling;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isSocialVulnerability(): ?bool
    {
        return $this->socialVulnerability;
    }

    /**
     * @param bool|null $socialVulnerability
     * @return $this
     */
    public function setSocialVulnerability(?bool $socialVulnerability): PatientRequest
    {
        $this->socialVulnerability = $socialVulnerability;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEthnicity(): ?string
    {
        return $this->ethnicity;
    }

    /**
     * @param string|null $ethnicity
     * @return $this
     */
    public function setEthnicity(?string $ethnicity): PatientRequest
    {
        $this->ethnicity = $ethnicity;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdGender(): ?int
    {
        return $this->idGender;
    }

    /**
     * @param int|null $idGender
     * @return $this
     */
    public function setIdGender(?int $idGender): PatientRequest
    {
        $this->idGender = $idGender;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBirthCounty(): ?string
    {
        return $this->birthCounty;
    }

    /**
     * @param string|null $birthCounty
     * @return $this
     */
    public function setBirthCounty(?string $birthCounty): PatientRequest
    {
        $this->birthCounty = $birthCounty;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdBirthUF(): ?int
    {
        return $this->idBirthUF;
    }

    /**
     * @param int|null $idBirthUF
     * @return $this
     */
    public function setIdBirthUF(?int $idBirthUF): PatientRequest
    {
        $this->idBirthUF = $idBirthUF;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdPassportIssuingCountry(): ?int
    {
        return $this->idPassportIssuingCountry;
    }

    /**
     * @param int|null $idPassportIssuingCountry
     * @return $this
     */
    public function setIdPassportIssuingCountry(?int $idPassportIssuingCountry): PatientRequest
    {
        $this->idPassportIssuingCountry = $idPassportIssuingCountry;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassportIssuingDate(): ?string
    {
        return $this->passportIssuingDate;
    }

    /**
     * @param string|null $passportIssuingDate
     * @return $this
     */
    public function setPassportIssuingDate(?string $passportIssuingDate): PatientRequest
    {
        $this->passportIssuingDate = $passportIssuingDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassportExpiryDate(): ?string
    {
        return $this->passportExpiryDate;
    }

    /**
     * @param string|null $passportExpiryDate
     * @return $this
     */
    public function setPassportExpiryDate(?string $passportExpiryDate): PatientRequest
    {
        $this->passportExpiryDate = $passportExpiryDate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdBirthCountry(): ?int
    {
        return $this->idBirthCountry;
    }

    /**
     * @param int|null $idBirthCountry
     * @return $this
     */
    public function setIdBirthCountry(?int $idBirthCountry): PatientRequest
    {
        $this->idBirthCountry = $idBirthCountry;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKinshipProcurator(): ?string
    {
        return $this->kinshipProcurator;
    }

    /**
     * @param string|null $kinshipProcurator
     * @return $this
     */
    public function setKinshipProcurator(?string $kinshipProcurator): PatientRequest
    {
        $this->kinshipProcurator = $kinshipProcurator;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCpfProcurator(): ?string
    {
        return $this->cpfProcurator;
    }

    /**
     * @param string|null $cpfProcurator
     * @return $this
     */
    public function setCpfProcurator(?string $cpfProcurator): PatientRequest
    {
        $this->cpfProcurator = $cpfProcurator;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNameProcurator(): ?string
    {
        return $this->nameProcurator;
    }

    /**
     * @param string|null $nameProcurator
     * @return $this
     */
    public function setNameProcurator(?string $nameProcurator): PatientRequest
    {
        $this->nameProcurator = $nameProcurator;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdentityIssuingDate(): ?string
    {
        return $this->identityIssuingDate;
    }

    /**
     * @param string|null $identityIssuingDate
     * @return $this
     */
    public function setIdentityIssuingDate(?string $identityIssuingDate): PatientRequest
    {
        $this->identityIssuingDate = $identityIssuingDate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdIdentityUF(): ?int
    {
        return $this->idIdentityUF;
    }

    /**
     * @param int|null $idIdentityUF
     * @return $this
     */
    public function setIdIdentityUF(?int $idIdentityUF): PatientRequest
    {
        $this->idIdentityUF = $idIdentityUF;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdentityIssuingBody(): ?string
    {
        return $this->identityIssuingBody;
    }

    /**
     * @param string|null $identityIssuingBody
     * @return $this
     */
    public function setIdentityIssuingBody(?string $identityIssuingBody): PatientRequest
    {
        $this->identityIssuingBody = $identityIssuingBody;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNisNumber(): ?string
    {
        return $this->nisNumber;
    }

    /**
     * @param string|null $nisNumber
     * @return $this
     */
    public function setNisNumber(?string $nisNumber): PatientRequest
    {
        $this->nisNumber = $nisNumber;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isFlagAps(): ?bool
    {
        return $this->flagAps;
    }

    /**
     * @param bool|null $flagAps
     * @return $this
     */
    public function setFlagAps(?bool $flagAps): PatientRequest
    {
        $this->flagAps = $flagAps;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdPlanType(): ?int
    {
        return $this->idPlanType;
    }

    /**
     * @param int|null $idPlanType
     * @return $this
     */
    public function setIdPlanType(?int $idPlanType): PatientRequest
    {
        $this->idPlanType = $idPlanType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegistration(): ?string
    {
        return $this->registration;
    }

    /**
     * @param string|null $registration
     * @return $this
     */
    public function setRegistration(?string $registration): PatientRequest
    {
        $this->registration = $registration;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHealthPlan(): ?string
    {
        return $this->healthPlan;
    }

    /**
     * @param string|null $healthPlan
     * @return $this
     */
    public function setHealthPlan(?string $healthPlan): PatientRequest
    {
        $this->healthPlan = $healthPlan;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEnterprise(): ?string
    {
        return $this->enterprise;
    }

    /**
     * @param string|null $enterprise
     * @return $this
     */
    public function setEnterprise(?string $enterprise): PatientRequest
    {
        $this->enterprise = $enterprise;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }

    /**
     * @param string|null $department
     * @return $this
     */
    public function setDepartment(?string $department): PatientRequest
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPatientRole(): ?string
    {
        return $this->patientRole;
    }

    /**
     * @param string|null $patientRole
     * @return $this
     */
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