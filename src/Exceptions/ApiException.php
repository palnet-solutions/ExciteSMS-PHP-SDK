<?php

declare(strict_types=1);

/*
 * ExcitesmsLib
 *
 * This file was automatically generated by palnet v3.0 ( https://www.palnet.io ).
 */

namespace ExcitesmsLib\Exceptions;

use ExcitesmsLib\Http\HttpResponse;
use ExcitesmsLib\Http\HttpRequest;

/**
 * Thrown when there is a network error or HTTP response status code is not okay.
 */
class ApiException extends \Exception implements Exception
{
    /**
     * HTTP request
     *
     * @var \ExcitesmsLib\Http\HttpRequest
     */
    private $request;

    /**
     * HTTP response
     *
     * @var \ExcitesmsLib\Http\HttpResponse|null
     */
    private $response;

    /**
     * @param string $reason the reason for raising an exception
     * @param \ExcitesmsLib\Http\HttpRequest $request
     */
    public function __construct(string $reason, HttpRequest $request, ?HttpResponse $response = null)
    {
        parent::__construct($reason, \is_null($response) ? 0 : $response->getStatusCode());
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * Returns the HTTP request
     */
    public function getHttpRequest(): HttpRequest
    {
        return $this->request;
    }

    /**
     * Returns the HTTP response
     */
    public function getHttpResponse(): ?HttpResponse
    {
        return $this->response;
    }

    /**
     * Is the response available?
     */
    public function hasResponse(): bool
    {
        return !\is_null($this->response);
    }
}
