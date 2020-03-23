<?php

class Session
{

    static $instance;

    static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Session();
        }
        return self::$instance;
    }

    public function __construct()
    {
        session_start();
    }

    public function setFlash($message)
    {
        $_SESSION['flash'] = $message;
    }

    public function hasFlashes()
    {
        return isset($_SESSION['flash']);
    }

    public function getFlashes()
    {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }

    public function write($value, $key, $key2 = false)
    {
        if (!$key2)
            $_SESSION[$key] = $value;
        if ($key2)
            $_SESSION[$key][$key2] = $value;
    }

    public function push($value, $key, $key2 = false)
    {
        if (!$key2)
            array_push($_SESSION[$key], $value);
        if ($key2)
            array_push($_SESSION[$key][$key2], $value);
    }

    public function read($key, $key2 = false)
    {
        if ($key2)
            return isset($_SESSION[$key][$key2]) ? $_SESSION[$key][$key2] : null;
        if (!$key2)
            return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public function delete($key, $key2 = false)
    {
        if (!$key2)
            unset($_SESSION[$key]);
        if ($key2)
            unset($_SESSION[$key][$key2]);
    }

}
