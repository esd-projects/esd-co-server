<?php


namespace ESD\Server\Co\Http;


use ESD\Core\Exception;

use ESD\Core\Server\Beans\Http\HttpStream;
use ESD\Core\Server\Beans\Http\Uri;
use ESD\Core\Server\Beans\Request;

class SwooleRequest extends Request
{

    /**
     * @var \Swoole\Http\Request
     */
    protected $swooleRequest;

    /**
     * 加载
     * @param null $realObject
     * @throws Exception
     */
    public function load($realObject = null)
    {
        if (! $realObject instanceof \Swoole\Http\Request) {
            throw new Exception("object must be instance of Swoole\\Request");
        }

        $this->swooleRequest = $realObject;
        $this->setHeaders($this->swooleRequest->header ?? []);
        $this->server = $this->swooleRequest->server;

        $this->queryParams = $this->swooleRequest->get ?? [];
        $this->parsedBody = $this->swooleRequest->post ?? [];

        $this->cookieParams = $this->swooleRequest->cookie ?? [];

        $this->files = $this->swooleRequest->files ?? [];
        $this->fd = $this->swooleRequest->fd;
        $this->streamId = $this->swooleRequest->streamId;

        $this->stream = new HttpStream($this->swooleRequest->rawContent());

        $this->method = strtoupper($this->server[self::SERVER_REQUEST_METHOD]);
        $this->uri = new Uri($this->server[self::SERVER_REQUEST_URI]);
    }
}