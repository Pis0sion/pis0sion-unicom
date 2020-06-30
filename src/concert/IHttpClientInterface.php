<?php


namespace Pis0sion\guzzle\concert;

/**
 * http请求客户端
 * Interface IHttpClientInterface
 * @package Pis0sion\guzzle\concert
 */
interface IHttpClientInterface
{
    /**
     * post 方式请求
     * @param string $httpUrl
     * @param array $requestParameter
     * @return mixed
     */
    public function sendRequest(string $httpUrl, array $requestParameter): string;

}