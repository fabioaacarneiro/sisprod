<?php

namespace Src;

use Dotenv\Dotenv;
use PDO;

final class Connection
{
    private static $conn;

    private function __construct()
    {
    }

    public static function up()
    {
        $dotenv = Dotenv::createImmutable('../');
        $dotenv->load();

        $host = $_ENV['HOSTNAME'];
        $dbname = $_ENV['DBNAME'];
        $user = $_ENV['USER'];
        $password = $_ENV['PASSWORD'];

        if (! isset(self::$conn)) {
            self::$conn = new PDO("mysql:dbname=$dbname;host=$host", $user, $password);
        }

        return self::$conn;
    }

    public static function down()
    {
        self::$conn = null;
    }
}
