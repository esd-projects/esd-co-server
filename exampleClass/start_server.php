<?php

use ESD\Core\Server\Config\ServerConfig;
use ESD\ExampleClass\DefaultServer;
use ESD\ExampleClass\Port\DefaultPort;
use ESD\ExampleClass\Process\DefaultProcess;

require __DIR__ . '/../vendor/autoload.php';

define("ROOT_DIR", __DIR__ . "/../");
define("RES_DIR", __DIR__ . "/resources");

$server = new DefaultServer(
    new ServerConfig(),
    DefaultPort::class,
    DefaultProcess::class);

$server->configure();
$server->start();