<?php
/**
 * @author devxnet
 * @date   2023-08-19 17:22:19
 * @file   NomenclatureService.php
 *
 * Do not modify this code on your own, as it may lead to unexpected outcomes.
 * We do not take responsibility for any issues that may arise from unauthorized changes.
 * For inquiries about modifications, please contact devxnetx@gmail.com.
 */

namespace Devxnet\BoApiPhp\Services;

use Devxnet\BoApiPhp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Devxnet\BoApiPhp\Exceptions\ApiException;

class NomenclatureService
{
    private Client $client;

    public function __construct (Client $client)
    {
        $this->client = $client;
    }


    /**
     * @return array
     * @throws ApiException|GuzzleException
     */
    public function cities (): array
    {
        return $this->client->get('cities');
    }

    /**
     * @return array
     * @throws ApiException|GuzzleException
     */
    public function categories (): array
    {
        return $this->client->get('categories');
    }
}