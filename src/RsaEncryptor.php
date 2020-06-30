<?php


namespace Pis0sion\guzzle;


use Pis0sion\guzzle\concert\IEncryptServiceInterface;
use think\Config;

/**
 * Class RsaEncryptor
 * @package Pis0sion\guzzle
 */
class RsaEncryptor implements IEncryptServiceInterface
{
    /**
     * @var array
     */
    protected $config = [];

    /**
     * @var string
     */
    protected $publicKey;

    /**
     * RsaEncryptor constructor.
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config->get("unicom");
        $this->publicKey = $this->config['publicKey'];
    }


    /**
     * 加密
     * @param string $encodeStr
     * @return string|null
     */
    public function encrypt(string $encodeStr): ?string
    {
        // TODO: Implement encrypt() method.
        $publicKey = openssl_pkey_get_public($this->publicKey);
        return openssl_public_encrypt($encodeStr, $encryptedStr, $publicKey) ? base64_encode($encryptedStr) : null;
    }

}