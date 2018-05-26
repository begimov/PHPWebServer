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

    protected function bind()  
    {
        if (!socket_bind( $this->socket, $this->host, $this->port)) {
            throw new Exception('Could not bind: '.$this->host.':'.$this->port.' - '.socket_strerror(socket_last_error()));
        }
    }
}
