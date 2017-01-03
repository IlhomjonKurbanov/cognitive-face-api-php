<?php

namespace CognitiveFaceApi;

use CognitiveFaceApi\Component\FaceListClient;
use CognitiveFaceApi\Component\PersonClient;
use CognitiveFaceApi\Component\PersonGroupClient;

class CognitiveFaceApi
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var FaceListClient
     */
    public $faceList;

    /**
     * @var PersonGroupClient
     */
    public $personGroup;

    /**
     * @var PersonClient
     */
    public $person;

    public function __construct($subscriptionKey)
    {
        $this->client = new Client($subscriptionKey);
        $this->faceList = new FaceListClient($this->client);
        $this->personGroup = new PersonGroupClient($this->client);
        $this->person = new PersonClient($this->client);
    }
}