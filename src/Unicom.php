<?php


namespace Pis0sion\guzzle;

/**
 * Class Unicom
 * @package Pis0sion\guzzle
 */
class Unicom extends HttpEmitter
{
    public function handle()
    {
        return $this->encryptor->encrypt("hello");
    }
}