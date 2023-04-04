<?php

/**
 * router for rest api
 */
class Router
{


    function __call()
    {
        $this->output('', [$_SERVER["SERVER_PROTOCOL"]." 404 Not Found"]);
    }

    /**
     * get an array of url chunks
     * format: url/X/X?param
     */
    public function getRoutes()
    {
        return explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }

    public function getParam()
    {
        return parse_url($_SERVER['QUERY_STRING'], $result);
    }

    public function output($data, $headers = [])
    {
        if(is_array($headers) && count($headers) > 0)
        {         
            foreach($headers as $header)
            {
                header($header);
            }
        }

        print $data;

        exit;
    }
}