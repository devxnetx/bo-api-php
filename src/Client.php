<?php

namespace Devxnet\BoApiPhp;
 
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Devxnet\BoApiPhp\Exceptions\ApiException;

class Client
{
    const BASEURL = 'https://burzi-obiavi.com/api/';

    private array              $authenticationData;
    private \GuzzleHttp\Client $guzzle;

    /**
     * @param $username
     * @param $password
     */
    public function __construct ($username, $password)
    {
        $this->authenticationData = [
            'username' => $username,
            'password' => $password,
        ];


        $this->guzzle = new \GuzzleHttp\Client([
            'base_uri' => self::BASEURL,
            'timeout'  => 10, // Request timeout in seconds
        ]);
    }

    /**
     * @param $username
     * @param $password
     *
     * @return Client
     */
    public static function initialize ($username, $password): Client
    {
        return new self($username, $password);
    }

    /**
     * @param       $endpoint
     * @param array $data
     *
     * @return array
     * @throws ApiException
     * @throws GuzzleException
     */
    public function post ($endpoint, array $data): array
    {
        try {
            $authDataAndRequestData = array_merge($data, $this->authenticationData);

            $response = $this->guzzle->post($endpoint, [
                'json' => $authDataAndRequestData,
            ]);

            return $this->handleResponse($response);
        } catch (ClientException $e) {
            throw new ApiException('Request failed: ' . $e->getMessage());
        }
    }

    /**
     * @param $response
     *
     * @return array
     * @throws ApiException
     */
    private function handleResponse ($response): array
    {
        // Assuming your API responds with JSON data
        $data = json_decode($response->getBody(), TRUE);

        if ($response->getStatusCode() >= 400) {
            throw new ApiException($data['message'], $response->getStatusCode());
        }

        return $data;
    }


    /**
     * @param string $endpoint
     * @param array  $queryData
     *
     * @return array
     * @throws ApiException|GuzzleException
     */
    public function get (string $endpoint, array $queryData = []): array
    {
        try {
            $response = $this->guzzle->get($endpoint, [
                'query' => $queryData,
            ]);

            return $this->handleResponse($response);
        } catch (ClientException $e) {
            throw new ApiException('Request failed: ' . $e->getMessage());
        }
    }
}