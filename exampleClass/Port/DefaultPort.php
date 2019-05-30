<?php


namespace ESD\Server\Co\ExampleClass\Port;


use ESD\Core\Server\Beans\AbstractRequest;
use ESD\Core\Server\Beans\AbstractResponse;
use ESD\Core\Server\Beans\WebSocketFrame;
use ESD\Core\Server\Port\ServerPort;

class DefaultPort extends ServerPort
{

    public function onTcpConnect(int $fd, int $reactorId)
    {
        // TODO: Implement onTcpConnect() method.
    }

    public function onTcpClose(int $fd, int $reactorId)
    {
        // TODO: Implement onTcpClose() method.
    }

    public function onTcpReceive(int $fd, int $reactorId, string $data)
    {
        // TODO: Implement onTcpReceive() method.
    }

    public function onUdpPacket(string $data, array $clientInfo)
    {
        // TODO: Implement onUdpPacket() method.
    }

    public function onHttpRequest(AbstractRequest $request, AbstractResponse $response)
    {

    }

    public function onWsMessage(WebSocketFrame $frame)
    {
        // TODO: Implement onWsMessage() method.
    }

    public function onWsPassCustomHandshake(AbstractRequest $request): bool
    {
        // TODO: Implement onWsPassCustomHandshake() method.
    }

    public function onWsOpen(AbstractRequest $request)
    {
        // TODO: Implement onWsOpen() method.
    }

    public function onWsClose(int $fd, int $reactorId)
    {
        // TODO: Implement onWsClose() method.
    }
}