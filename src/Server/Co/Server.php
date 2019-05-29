<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/5/28
 * Time: 9:21
 */

namespace ESD\Server\Co;

use ESD\Core\Channel\Channel;
use ESD\Core\DI\DI;
use ESD\Core\Plugins\Event\EventCall;
use ESD\Core\Server\Config\ServerConfig;
use ESD\Coroutine\Channel\ChannelFactory;
use ESD\Coroutine\Co;
use ESD\Coroutine\Event\EventCallFactory;

abstract class Server extends \ESD\Core\Server\Server
{
    public function __construct(?ServerConfig $serverConfig, string $defaultPortClass, string $defaultProcessClass)
    {
        Co::enableCo();
        DI::$definitions = [
            Channel::class => new ChannelFactory(),
            EventCall::class => new EventCallFactory()
        ];
        if ($serverConfig == null) {
            $serverConfig = new ServerConfig();
        }
        parent::__construct($serverConfig, $defaultPortClass, $defaultProcessClass);
    }


    public function configure()
    {
        parent::configure();
        //打印配置
        $this->getLog()->debug("打印配置:\n" . $this->getConfigContext()->getCacheContainYaml());
    }
}