<?php

namespace Mmantai\Rest;

class Router
{

    private $Controllers;

    public function __construct()
    {
        $this->Controllers = array();
    }

    public function addRoute($route, $routeData)
    {
        $this->Controllers[$route] = $routeData;
    }

    public function getRoute($route)
    {

    }
}