<?php

namespace O4l3x4ndr3\SdkConexa\Types;

use GenreType;

class ProfessionalCommon
{

    private int $id;
    private string $name;
    private string $lastname;
    private string $mail;
    private string $cellphone;
    private int $specialtyId;
    private ?GenreType $sex;
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
        int       $id,
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
        string    $dateBirth
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
     * @return Doctor
     */
    public function setId(int $id): Doctor
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
     * @return Doctor
     */
    public function setName(string $name): Doctor
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
     * @return Doctor
     */
    public function setLastname(string $lastname): Doctor
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
     * @return Doctor
     */
    public function setMail(string $mail): Doctor
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
     * @return Doctor
     */
    public function setCellphone(string $cellphone): Doctor
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
     * @return Doctor
     */
    public function setSpecialtyId(int $specialtyId): Doctor
    {
        $this->specialtyId = $specialtyId;
        return $this;
    }

    /**
     * @return GenreType
     */
    public function getSex(): GenreType
    {
        return $this->sex;
    }

    /**
     * @param GenreType $sex
     * @return Doctor
     */
    public function setSex(GenreType $sex): Doctor
    {
        $this->sex = $sex;
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
     * @return Doctor
     */
    public function setIsBrazilian(bool $isBrazilian): Doctor
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
     * @return Doctor
     */
    public function setCpf(string $cpf): Doctor
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
     * @return Doctor
     */
    public function setCrm(string $crm): Doctor
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
     * @return Doctor
     */
    public function setCrmUf(string $crmUf): Doctor
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
     * @return Doctor
     */
    public function setDateBirth(string $dateBirth): Doctor
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
     * @return Doctor
     */
    public function setCep(?string $cep): Doctor
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
     * @return Doctor
     */
    public function setCity(?string $city): Doctor
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
     * @return Doctor
     */
    public function setUf(?string $uf): Doctor
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
     * @return Doctor
     */
    public function setNeighborhood(?string $neighborhood): Doctor
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
     * @return Doctor
     */
    public function setAddress(?string $address): Doctor
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
     * @return Doctor
     */
    public function setComplement(?string $complement): Doctor
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
     * @return Doctor
     */
    public function setSocialName(?string $socialName): Doctor
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
     * @return Doctor
     */
    public function setMotherName(?string $motherName): Doctor
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
     * @return Doctor
     */
    public function setUnknowMother(?bool $unknowMother): Doctor
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
     * @return Doctor
     */
    public function setIdGender(?int $idGender): Doctor
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
     * @return Doctor
     */
    public function setIdRaceColor(?int $idRaceColor): Doctor
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
     * @return Doctor
     */
    public function setIdNationality(?int $idNationality): Doctor
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
     * @return Doctor
     */
    public function setBirthCounty(?string $birthCounty): Doctor
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
     * @return Doctor
     */
    public function setIdBirthUF(?int $idBirthUF): Doctor
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
     * @return Doctor
     */
    public function setNaturalizationDate(?string $naturalizationDate): Doctor
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
     * @return Doctor
     */
    public function setIdBirthCountry(?int $idBirthCountry): Doctor
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
     * @return Doctor
     */
    public function setPassport(?string $passport): Doctor
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
     * @return Doctor
     */
    public function setIdPassportIssuingCountry(?int $idPassportIssuingCountry): Doctor
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
     * @return Doctor
     */
    public function setPassportIssuingDate(?string $passportIssuingDate): Doctor
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
     * @return Doctor
     */
    public function setPassportExpiryDate(?string $passportExpiryDate): Doctor
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
     * @return Doctor
     */
    public function setResidencialPhone(?string $residencialPhone): Doctor
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
     * @return Doctor
     */
    public function setIdAddressCountry(?int $idAddressCountry): Doctor
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
     * @return Doctor
     */
    public function setCns(?string $cns): Doctor
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
     * @return Doctor
     */
    public function setIdentity(?string $identity): Doctor
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
     * @return Doctor
     */
    public function setIdIdentityUF(?int $idIdentityUF): Doctor
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
     * @return Doctor
     */
    public function setIdentityIssuingDate(?string $identityIssuingDate): Doctor
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
     * @return Doctor
     */
    public function setIdentityIssuingBody(?string $identityIssuingBody): Doctor
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
     * @return Doctor
     */
    public function setNisNumber(?string $nisNumber): Doctor
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
     * @return Doctor
     */
    public function setIdCbo(?int $idCbo): Doctor
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
     * @return Doctor
     */
    public function setBlockAppointmentQueue(bool $blockAppointmentQueue): Doctor
    {
        $this->blockAppointmentQueue = $blockAppointmentQueue;
        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
