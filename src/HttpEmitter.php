<?php


namespace Pis0sion\guzzle;

use Pis0sion\guzzle\concert\IEncryptServiceInterface;
use Pis0sion\guzzle\concert\IHttpClientInterface;

/**
 * Class HttpEmitter
 * @package Pis0sion\guzzle
 */
abstract class HttpEmitter
{
    /**
     * 请求客户端
     * @var IHttpClientInterface
     */
    protected $httpClient;

    /**
     * 加密器
     * @var IEncryptServiceInterface
     */
    protected $encryptor;

    /**
     * 设置请求客户端
     * HttpEmitter constructor.
     * @param IHttpClientInterface $httpClient
     * @param IEncryptServiceInterface $encryptor
     */
    public function __construct(IHttpClientInterface $httpClient, IEncryptServiceInterface $encryptor)
    {
        $this->httpClient = $httpClient;
        $this->encryptor = $encryptor;
    }

    /**
     * http 请求
     * @param string $httpUrl
     * @param array $requestParameter
     * @return string
     */
    public function httpRequest(string $httpUrl, array $requestParameter): string
    {
        return $this->httpClient->sendRequest($httpUrl, $requestParameter);
    }


}