<?php

namespace O4l3x4ndr3\SdkConexa\Types;

use GenreType;

class ProfessionalRequest
{

    private int $id;
    private string $name;
    private string $lastname;
    private string $mail;
    private string $cellphone;
    private int $specialtyId;
    private string $sex;
    private bool $isBrazilian;
    private string $cpf;
    private string $crm;
    private string $crmUf;
    private string $dateBirth;
    private ?string $cep;
    private ?string $city;
    private ?string $uf;
    private ?string $neighborhood;
    private ?string $address;
    private ?string $complement;
    private ?string $socialName;
    private ?string $motherName;
    private ?bool $unknowMother;
    private ?int $idGender;
    private ?int $idRaceColor;
    private ?int $idNationality;
    private ?string $birthCounty;
    private ?int $idBirthUF;
    private ?string $naturalizationDate;
    private ?int $idBirthCountry;
    private ?string $passport;
    private ?int $idPassportIssuingCountry;
    private ?string $passportIssuingDate;
    private ?string $passportExpiryDate;
    private ?string $residencialPhone;
    private ?int $idAddressCountry;
    private ?string $cns;
    private ?string $identity;
    private ?int $idIdentityUF;
    private ?string $identityIssuingDate;
    private ?string $identityIssuingBody;
    private ?string $nisNumber;
    private ?int $idCbo;
    private bool $blockAppointmentQueue;

    public function __construct(
        int    $id,
        string $name,
        string $lastname,
        string $mail,
        string $cellphone,
        int    $specialtyId,
        string $sex,
        bool   $isBrazilian,
        string $cpf,
        string $crm,
        string $crmUf,
        string $dateBirth
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->mail = $mail;
        $this->cellphone = $cellphone;
        $this->specialtyId = $specialtyId;
        $this->sex = $sex;
        $this->isBrazilian = $isBrazilian;
        $this->cpf = $cpf;
        $this->crm = $crm;
        $this->crmUf = $crmUf;
        $this->dateBirth = $dateBirth;
        $this->cep = null;
        $this->city = null;
        $this->uf = null;
        $this->neighborhood = null;
        $this->address = null;
        $this->complement = null;
        $this->socialName = null;
        $this->motherName = null;
        $this->unknowMother = false;
        $this->idGender = null;
        $this->idRaceColor = null;
        $this->idNationality = null;
        $this->birthCounty = null;
        $this->idBirthUF = null;
        $this->naturalizationDate = null;
        $this->idBirthCountry = null;
        $this->passport = null;
        $this->idPassportIssuingCountry = null;
        $this->passportIssuingDate = null;
        $this->passportExpiryDate = null;
        $this->residencialPhone = null;
        $this->idAddressCountry = null;
        $this->cns = null;
        $this->identity = null;
        $this->idIdentityUF = null;
        $this->identityIssuingDate = null;
        $this->identityIssuingBody = null;
        $this->nisNumber = null;
        $this->idCbo = null;
        $this->blockAppointmentQueue = false;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ProfessionalRequest
     */
    public function setId(int $id): ProfessionalRequest
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ProfessionalRequest
     */
    public function setName(string $name): ProfessionalRequest
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return ProfessionalRequest
     */
    public function setLastname(string $lastname): ProfessionalRequest
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     * @return ProfessionalRequest
     */
    public function setMail(string $mail): ProfessionalRequest
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return string
     */
    public function getCellphone(): string
    {
        return $this->cellphone;
    }

    /**
     * @param string $cellphone
     * @return ProfessionalRequest
     */
    public function setCellphone(string $cellphone): ProfessionalRequest
    {
        $this->cellphone = $cellphone;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpecialtyId(): int
    {
        return $this->specialtyId;
    }

    /**
     * @param int $specialtyId
     * @return ProfessionalRequest
     */
    public function setSpecialtyId(int $specialtyId): ProfessionalRequest
    {
        $this->specialtyId = $specialtyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @param GenreType $sex
     * @return ProfessionalRequest
     */
    public function setSex(GenreType $sex): ProfessionalRequest
    {
        $this->sex = $sex->value;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBrazilian(): bool
    {
        return $this->isBrazilian;
    }

    /**
     * @param bool $isBrazilian
     * @return ProfessionalRequest
     */
    public function setIsBrazilian(bool $isBrazilian): ProfessionalRequest
    {
        $this->isBrazilian = $isBrazilian;
        return $this;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     * @return ProfessionalRequest
     */
    public function setCpf(string $cpf): ProfessionalRequest
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return string
     */
    public function getCrm(): string
    {
        return $this->crm;
    }

    /**
     * @param string $crm
     * @return ProfessionalRequest
     */
    public function setCrm(string $crm): ProfessionalRequest
    {
        $this->crm = $crm;
        return $this;
    }

    /**
     * @return string
     */
    public function getCrmUf(): string
    {
        return $this->crmUf;
    }

    /**
     * @param string $crmUf
     * @return ProfessionalRequest
     */
    public function setCrmUf(string $crmUf): ProfessionalRequest
    {
        $this->crmUf = $crmUf;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateBirth(): string
    {
        return $this->dateBirth;
    }

    /**
     * @param string $dateBirth
     * @return ProfessionalRequest
     */
    public function setDateBirth(string $dateBirth): ProfessionalRequest
    {
        $this->dateBirth = $dateBirth;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCep(): ?string
    {
        return $this->cep;
    }

    /**
     * @param string|null $cep
     * @return ProfessionalRequest
     */
    public function setCep(?string $cep): ProfessionalRequest
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return ProfessionalRequest
     */
    public function setCity(?string $city): ProfessionalRequest
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUf(): ?string
    {
        return $this->uf;
    }

    /**
     * @param string|null $uf
     * @return ProfessionalRequest
     */
    public function setUf(?string $uf): ProfessionalRequest
    {
        $this->uf = $uf;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNeighborhood(): ?string
    {
        return $this->neighborhood;
    }

    /**
     * @param string|null $neighborhood
     * @return ProfessionalRequest
     */
    public function setNeighborhood(?string $neighborhood): ProfessionalRequest
    {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     * @return ProfessionalRequest
     */
    public function setAddress(?string $address): ProfessionalRequest
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComplement(): ?string
    {
        return $this->complement;
    }

    /**
     * @param string|null $complement
     * @return ProfessionalRequest
     */
    public function setComplement(?string $complement): ProfessionalRequest
    {
        $this->complement = $complement;
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
     * @return ProfessionalRequest
     */
    public function setSocialName(?string $socialName): ProfessionalRequest
    {
        $this->socialName = $socialName;
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
     * @return ProfessionalRequest
     */
    public function setMotherName(?string $motherName): ProfessionalRequest
    {
        $this->motherName = $motherName;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getUnknowMother(): ?bool
    {
        return $this->unknowMother;
    }

    /**
     * @param bool|null $unknowMother
     * @return ProfessionalRequest
     */
    public function setUnknowMother(?bool $unknowMother): ProfessionalRequest
    {
        $this->unknowMother = $unknowMother;
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
     * @return ProfessionalRequest
     */
    public function setIdGender(?int $idGender): ProfessionalRequest
    {
        $this->idGender = $idGender;
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
     * @return ProfessionalRequest
     */
    public function setIdRaceColor(?int $idRaceColor): ProfessionalRequest
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
     * @return ProfessionalRequest
     */
    public function setIdNationality(?int $idNationality): ProfessionalRequest
    {
        $this->idNationality = $idNationality;
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
     * @return ProfessionalRequest
     */
    public function setBirthCounty(?string $birthCounty): ProfessionalRequest
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
     * @return ProfessionalRequest
     */
    public function setIdBirthUF(?int $idBirthUF): ProfessionalRequest
    {
        $this->idBirthUF = $idBirthUF;
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
     * @return ProfessionalRequest
     */
    public function setNaturalizationDate(?string $naturalizationDate): ProfessionalRequest
    {
        $this->naturalizationDate = $naturalizationDate;
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
     * @return ProfessionalRequest
     */
    public function setIdBirthCountry(?int $idBirthCountry): ProfessionalRequest
    {
        $this->idBirthCountry = $idBirthCountry;
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
     * @return ProfessionalRequest
     */
    public function setPassport(?string $passport): ProfessionalRequest
    {
        $this->passport = $passport;
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
     * @return ProfessionalRequest
     */
    public function setIdPassportIssuingCountry(?int $idPassportIssuingCountry): ProfessionalRequest
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
     * @return ProfessionalRequest
     */
    public function setPassportIssuingDate(?string $passportIssuingDate): ProfessionalRequest
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
     * @return ProfessionalRequest
     */
    public function setPassportExpiryDate(?string $passportExpiryDate): ProfessionalRequest
    {
        $this->passportExpiryDate = $passportExpiryDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getResidencialPhone(): ?string
    {
        return $this->residencialPhone;
    }

    /**
     * @param string|null $residencialPhone
     * @return ProfessionalRequest
     */
    public function setResidencialPhone(?string $residencialPhone): ProfessionalRequest
    {
        $this->residencialPhone = $residencialPhone;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdAddressCountry(): ?int
    {
        return $this->idAddressCountry;
    }

    /**
     * @param int|null $idAddressCountry
     * @return ProfessionalRequest
     */
    public function setIdAddressCountry(?int $idAddressCountry): ProfessionalRequest
    {
        $this->idAddressCountry = $idAddressCountry;
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
     * @return ProfessionalRequest
     */
    public function setCns(?string $cns): ProfessionalRequest
    {
        $this->cns = $cns;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    /**
     * @param string|null $identity
     * @return ProfessionalRequest
     */
    public function setIdentity(?string $identity): ProfessionalRequest
    {
        $this->identity = $identity;
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
     * @return ProfessionalRequest
     */
    public function setIdIdentityUF(?int $idIdentityUF): ProfessionalRequest
    {
        $this->idIdentityUF = $idIdentityUF;
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
     * @return ProfessionalRequest
     */
    public function setIdentityIssuingDate(?string $identityIssuingDate): ProfessionalRequest
    {
        $this->identityIssuingDate = $identityIssuingDate;
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
     * @return ProfessionalRequest
     */
    public function setIdentityIssuingBody(?string $identityIssuingBody): ProfessionalRequest
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
     * @return ProfessionalRequest
     */
    public function setNisNumber(?string $nisNumber): ProfessionalRequest
    {
        $this->nisNumber = $nisNumber;
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
     * @return ProfessionalRequest
     */
    public function setIdCbo(?int $idCbo): ProfessionalRequest
    {
        $this->idCbo = $idCbo;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBlockAppointmentQueue(): bool
    {
        return $this->blockAppointmentQueue;
    }

    /**
     * @param bool $blockAppointmentQueue
     * @return ProfessionalRequest
     */
    public function setBlockAppointmentQueue(bool $blockAppointmentQueue): ProfessionalRequest
    {
        $this->blockAppointmentQueue = $blockAppointmentQueue;
        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
