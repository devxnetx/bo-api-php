<?php

namespace Devxnet\BoApiPhp;

class BurziObiavi
{

    private Client $client;

    public function __construct ($username, $password, $autoValidateCredentials = TRUE)
    {

        $this->client = Client::initialize($username, $password);

    }
}