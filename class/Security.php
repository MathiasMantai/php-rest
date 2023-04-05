<?php

namespace Mmantai\Rest;
//use my dbcore package
//use my querybuilder

class Security
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * 
     */
    public function checkApiKey(string $apiKey)
    {
        //check if api key exists in database
        return $db->select()->countRow() > 0;
    }

    /**
     * generate api key
     */
    public function getApiKey($length = 20)
    {

    }
}