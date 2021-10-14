<?php

declare(strict_types=1);

/*
 * ExcitesmsLib
 *
 * This file was automatically generated by palnet v3.0 ( https://www.palnet.io ).
 */

namespace ExcitesmsLib;

use ExcitesmsLib\Controllers;

/**
 * ExcitesmsLib client class
 */
class ExcitesmsClient implements ConfigurationInterface
{
    private $misc;

    private $timeout = ConfigurationDefaults::TIMEOUT;
    private $environment = ConfigurationDefaults::ENVIRONMENT;
    private $accessToken = ConfigurationDefaults::ACCESS_TOKEN;
    private $accessTokenManager;
    private $authManagers = [];
    private $httpCallback;

    public function __construct(array $configOptions = null)
    {
        if (isset($configOptions['timeout'])) {
            $this->timeout = $configOptions['timeout'];
        }
        if (isset($configOptions['environment'])) {
            $this->environment = $configOptions['environment'];
        }
        if (isset($configOptions['accessToken'])) {
            $this->accessToken = $configOptions['accessToken'];
        }
        if (isset($configOptions['httpCallback'])) {
            $this->httpCallback = $configOptions['httpCallback'];
        }

        $this->accessTokenManager = new AccessTokenManager($this->accessToken);
        $this->authManagers['global'] = $this->accessTokenManager;
    }

    /**
     * Get the client configuration as an associative array
     */
    public function getConfiguration(): array
    {
        $configMap = [];

        if (isset($this->timeout)) {
            $configMap['timeout'] = $this->timeout;
        }
        if (isset($this->environment)) {
            $configMap['environment'] = $this->environment;
        }
        if ($this->getAccessTokenCredentials()->getAccessToken() !== null) {
            $configMap['accessToken'] = $this->getAccessTokenCredentials()->getAccessToken();
        }
        if (isset($this->httpCallback)) {
            $configMap['httpCallback'] = $this->httpCallback;
        }

        return $configMap;
    }

    /**
     * Clone this client and override given configuration options
     */
    public function withConfiguration(array $configOptions): self
    {
        return new self(\array_merge($this->getConfiguration(), $configOptions));
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function getEnvironment(): string
    {
        return $this->environment;
    }

    public function getAccessTokenCredentials(): ?AccessTokenCredentials
    {
        return $this->accessTokenManager;
    }

    /**
     * Get the base uri for a given server in the current environment
     *
     * @param  string $server Server name
     *
     * @return string         Base URI
     */
    public function getBaseUri(string $server = Server::SERVER_1): string
    {
        return static::ENVIRONMENT_MAP[$this->environment][$server];
    }

    /**
     * Returns Misc Controller
     */
    public function getMiscController(): Controllers\MiscController
    {
        if ($this->misc == null) {
            $this->misc = new Controllers\MiscController($this, $this->authManagers, $this->httpCallback);
        }
        return $this->misc;
    }

    /**
     * A map of all baseurls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::PRODUCTION => [
            Server::SERVER_1 => 'https://gateway.excitesms.tech/api/v3',
        ],
    ];
}
