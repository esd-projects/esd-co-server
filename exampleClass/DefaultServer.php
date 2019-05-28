<?php

namespace ESD\Server\Co\ExampleClass;

use ESD\Core\Server\Process\Process;
use ESD\Server\Co\Server;

class DefaultServer extends Server
{
    /**
     * 所有的配置插件已初始化好
     * @return mixed
     */
    public function configureReady()
    {
        // TODO: Implement configureReady() method.
    }

    public function onStart()
    {
        // TODO: Implement onStart() method.
    }

    public function onShutdown()
    {
        // TODO: Implement onShutdown() method.
    }

    public function onWorkerError(Process $process, int $exit_code, int $signal)
    {
        // TODO: Implement onWorkerError() method.
    }

    public function onManagerStart()
    {
        // TODO: Implement onManagerStart() method.
    }

    public function onManagerStop()
    {
        // TODO: Implement onManagerStop() method.
    }
}