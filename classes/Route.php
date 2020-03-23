<?php

class Route
{

    static $instance = null;

    static function params($params): Route
    {
        if(!self::$instance){
            self::$instance = new Route();
        }
        
    }

    public function setParams($params): void
    {

    }

    public function admin($param): boolean
    {
        
    }


}