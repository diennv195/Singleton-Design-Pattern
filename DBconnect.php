<?php

class DBConnection {

    private static $instance = null;

    public static function get()
    {
        if(self::$instance === null)
        {
            self::$instance = new PDO('mysql:host=localhost;dbname=test', 'root',  'root');
        }

        return self::$instance;
    }
}