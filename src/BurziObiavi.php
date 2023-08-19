<?php

namespace Devxnet\BoApiPhp;

use Devxnet\BoApiPhp\Services\AdService;
use Devxnet\BoApiPhp\Services\NomenclatureService;

class BurziObiavi
{

    private Client              $client;
    private NomenclatureService $nomenclatureService;
    private AdService           $adService;

    public function __construct ($username, $password)
    {
        $this->client = Client::initialize($username, $password);

        $this->nomenclatureService = new NomenclatureService($this->client);
        $this->adService = new AdService($this->client);
    }

    /**
     * @return NomenclatureService
     */
    public function getNomenclatureService (): NomenclatureService
    {
        return $this->nomenclatureService;
    }

    /**
     * @return AdService
     */
    public function getAdService (): AdService
    {
        return $this->adService;
    }

}