<?php

declare(strict_types=1);

/*
 * ExcitesmsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ExcitesmsLib\Models;

class ViewAnSMS implements \JsonSerializable
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var Data1
     */
    private $data;

    /**
     * @param string $status
     * @param Data1 $data
     */
    public function __construct(string $status, Data1 $data)
    {
        $this->status = $status;
        $this->data = $data;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Data.
     */
    public function getData(): Data1
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @required
     * @maps data
     */
    public function setData(Data1 $data): void
    {
        $this->data = $data;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['status']  = $this->status;
        $json['message'] = $this->message;
        $json['data']    = $this->data;

        return $json;
    }
}
