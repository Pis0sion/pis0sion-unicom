<?php


namespace Pis0sion\guzzle;

use Pis0sion\guzzle\concert\IEncryptServiceInterface;
use Pis0sion\guzzle\concert\IHttpClientInterface;
use think\Service as BaseService;

/**
 * Class Service
 * @package Pis0sion\guzzle
 */
class Service extends BaseService
{
    /**
     * 注册服务
     */
    public function register()
    {
        // 设置请求客户端为guzzle客户端
        $this->app->bind(IHttpClientInterface::class, GuzzleHttpClient::class);
        // 设置加密器类型
        $this->app->bind(IEncryptServiceInterface::class, RsaEncryptor::class);
        // 包装 httpclient 请求
        $this->app->bind("unicom", Unicom::class);
    }

}