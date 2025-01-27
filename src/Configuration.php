<?php
/**
 * Copyright (c) 2025.
 * @authorAlexandre G R Alves
 * Author GitHub: https://github.com/04l3x4ndr3
 * Project GitHub:  https://github.com/04l3x4ndr3/sdk-conexa-saude
 */

namespace O4l3x4ndr3\SdkConexa;

class Configuration
{

    const ENV_DEVELOPMENT = "development";
    const ENV_PRODUCTION = "production";

    private array $URL_PRODUCTION = [
        "default" => 'https://api.conexasaude.com.br',
    ];

    private array $URL_DEVELOPMENT = [
        "default" => 'https://hml-api.conexasaude.com.br',
    ];

    private ?string $environment;
    private ?string $token;
    private ?array $httpHeader;

    public function __construct(?string $token = null, ?string $environment = null)
    {
        $this->environment = $environment ?? $_SERVER['CONEXA_ENVIRONMENT'] ?? self::ENV_DEVELOPMENT;
        $this->token = $token ?? $_SERVER['CONEXA_TOKEN'];
        $this->httpHeader = [];
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return void
     */
    public function setToken(string $token): Configuration
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     *
     * @return void
     */
    public function setEnvironment(string $environment): Configuration
    {
        $this->environment = $environment;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getHttpHeader(): ?array
    {
        return $this->httpHeader;
    }

    /**
     * @param array $httpHeader
     */
    public function setHttpHeader(array $httpHeader): Configuration
    {
        $this->httpHeader = $httpHeader;
        return $this;
    }

    /**
     * @param string $context
     *
     * @return string
     */
    public function getUrl(?string $context = 'default'): string
    {
        if ($this->getEnvironment() === self::ENV_PRODUCTION) {
            return $this->URL_PRODUCTION[$context ?? 'default'];
        }

        return $this->URL_DEVELOPMENT[$context ?? 'default'];
    }
}
