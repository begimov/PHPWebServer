<?php

namespace App;

class Request
{
    protected $method = null;  

    protected $uri = null;  

    protected $parameters = [];  

    protected $headers = [];

    public static function withHeaderString($header)  
    {
        $lines = explode("\n", $header);

        list($method, $uri) = explode(' ', array_shift($lines));

        $headers = [];

        foreach($lines as $line)
        {
            $line = trim($line);

            if (strpos($line, ': ') !== false)
            {
                list($key, $value) = explode(': ', $line);
                $headers[$key] = $value;
            }
        }   

        return new static($method, $uri, $headers);
    }
}
