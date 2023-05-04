<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use PDO;

class ConnectionController 
{
    private static ?PDO $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            $username = 'root';
            $password = '';
            $host = 'localhost';
            $dbname = 'aluraplay';

            $dsn = "mysql:host=$host;dbname=$dbname";

            self::$instance = new PDO($dsn, $username, $password);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$instance;
    }
}
