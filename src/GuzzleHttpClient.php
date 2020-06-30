<?php


namespace Pis0sion\guzzle;

use GuzzleHttp\Client;
use Pis0sion\guzzle\concert\IHttpClientInterface;

/**
 * Class GuzzleHttpClient
 * @package Pis0sion\guzzle
 */
class GuzzleHttpClient implements IHttpClientInterface
{
    /**
     * @var Client
     */
    protected $httpClient;

    /**
     * GuzzleHttpClient constructor.
     */
    public function __construct()
    {
        $this->httpClient = new Client();
    }

    /**
     * post 请求
     * @param string $httpUrl
     * @param array $requestParameter
     * @return string
     * @throws \Throwable
     */
    public function sendRequest(string $httpUrl, array $requestParameter): string
    {
        try {
            return $this->httpClient->request("POST", $httpUrl, ['form_params' => $requestParameter])->getBody()->getContents();
        } catch (\Throwable $throwable) {
            throw $throwable;
        }
    }

}