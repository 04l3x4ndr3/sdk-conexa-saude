<?php

namespace O4l3x4ndr3\SdkConexa\Types;

class PatientAddressRequest
{

    private ?string $additionalAddressDetails;
    private ?string $city;
    private ?string $country;
    private ?string $region;
    private ?string $state;
    private ?string $streetAddress;
    private ?string $numberAddress;
    private ?string $zipCode;

    /**
     * @param string|null $additionalAddressDetails
     * @param string|null $city
     * @param string|null $country
     * @param string|null $region
     * @param string|null $state
     * @param string|null $streetAddress
     * @param string|null $numberAddress
     * @param string|null $zipCode
     */
    public function __construct(?string $additionalAddressDetails = null, ?string $city = null, ?string $country = null, ?string $region = null, ?string $state = null, ?string $streetAddress = null, ?string $numberAddress = null, ?string $zipCode = null)
    {
        $this->additionalAddressDetails = $additionalAddressDetails;
        $this->city = $city;
        $this->country = $country;
        $this->region = $region;
        $this->state = $state;
        $this->streetAddress = $streetAddress;
        $this->numberAddress = $numberAddress;
        $this->zipCode = $zipCode;
    }

    public function getAdditionalAddressDetails(): ?string
    {
        return $this->additionalAddressDetails;
    }

    public function setAdditionalAddressDetails(?string $additionalAddressDetails): PatientAddressRequest
    {
        $this->additionalAddressDetails = $additionalAddressDetails;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): PatientAddressRequest
    {
        $this->city = $city;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): PatientAddressRequest
    {
        $this->country = $country;
        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): PatientAddressRequest
    {
        $this->region = $region;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): PatientAddressRequest
    {
        $this->state = $state;
        return $this;
    }

    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    public function setStreetAddress(?string $streetAddress): PatientAddressRequest
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }

    public function getNumberAddress(): ?string
    {
        return $this->numberAddress;
    }

    public function setNumberAddress(?string $numberAddress): PatientAddressRequest
    {
        $this->numberAddress = $numberAddress;
        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): PatientAddressRequest
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }

}