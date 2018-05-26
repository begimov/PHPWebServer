<?php

namespace App;

class Server
{
    protected $host = null;

    protected $port = null;

    protected $socket = null;

    protected function createSocket()
    {
        $this->socket = socket_create(AF_INET, SOCK_STREAM, 0);
    }
}
