<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/5/24
 * Time: 18:09
 */

namespace ESD\Server\Co;

use DI\DependencyException;
use DI\NotFoundException;
use ESD\Core\Channel\Channel;
use ESD\Core\DI\DI;
use ESD\Core\Plugins\Event\EventCall;
use ESD\Core\Server\Config\ServerConfig;
use ESD\Core\Server\Server;
use ESD\Coroutine\Channel\ChannelFactory;
use ESD\Coroutine\Co;
use ESD\Coroutine\Event\EventCallFactory;

abstract class CoServer extends Server
{
    public function __construct(ServerConfig $serverConfig, string $defaultPortClass, string $defaultProcessClass)
    {
        Co::enableCo();
        DI::$definitions = [
            EventCall::class => new EventCallFactory(),
            Channel::class => new ChannelFactory()
        ];
        parent::__construct($serverConfig, $defaultPortClass, $defaultProcessClass);
    }

    public function configure()
    {
        parent::configure();
        //打印配置
        $this->getLog()->debug("打印配置:\n" . $this->getConfigContext()->getCacheContainYaml());
    }
}