<?php


namespace Pis0sion\guzzle\concert;

/**
 * 加密解密器
 * Interface IEncryptServiceInterface
 * @package Pis0sion\guzzle\concert
 */
interface IEncryptServiceInterface
{
    /**
     * 加密
     * @param string $encodeStr
     * @return mixed
     */
    public function encrypt(string $encodeStr): ?string;

}