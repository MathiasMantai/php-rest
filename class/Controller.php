<?php

namespace Mathiasmantai\Rest;

/**
 * router for rest api
 */
class Controller
{
    /**
     * return 404 not found header, when calling a method that doesn't exist
     */
    function __call()
    {
        $this->output('', [$_SERVER["SERVER_PROTOCOL"]." 404 Not Found"]);
    }

    /**
     * get an array of url chunks
     * format: url/X/X?param
     * @return array
     */
    public function getRoutes()
    {
        return explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }

    /**
     * get all parameters from query string
     * @return string
     */
    public function getParam()
    {
        return parse_url($_SERVER['QUERY_STRING'], $result);
    }

    //check param to see what kind of api call has been made
    //examples 

    /**
     * output headers and data, exit afterwards to prevent header errors
     * @return string 
     */
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