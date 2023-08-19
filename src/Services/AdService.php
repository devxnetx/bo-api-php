<?php
/**
 * @author devxnet
 * @date   2023-08-19 18:48:26
 * @file   AdService.php
 *
 * Do not modify this code on your own, as it may lead to unexpected outcomes.
 * We do not take responsibility for any issues that may arise from unauthorized changes.
 * For inquiries about modifications, please contact devxnetx@gmail.com.
 */

namespace Devxnet\BoApiPhp\Services;


use Devxnet\BoApiPhp\Client;

class AdService
{
    private Client $client;

    public function __construct (Client $client)
    {
        $this->client = $client;
    }


    public function postAd (array $postData)
    {
        return $this->client->post('post-ad', $postData);
    }
}