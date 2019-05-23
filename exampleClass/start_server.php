<?php

use ESD\Co\Server\ExampleClass\Port\SwoolePort;
use ESD\Co\Server\ExampleClass\Process\SwooleProcess;
use ESD\Co\Server\ExampleClass\SwooleApplication;
use ESD\Core\Server\Config\ServerConfig;
use ESD\Core\Server\Server;

require __DIR__ . '/../vendor/autoload.php';
#require __DIR__ . '/../../esd-core/vendor/autoload.php';


define("ROOT_DIR", __DIR__ . "/../");
define("RES_DIR", __DIR__ . "/resources");

$server = new Server(
    new ServerConfig(),
    SwooleApplication::class,
    SwoolePort::class,
    SwooleProcess::class);

$server->configure();
$server->start();