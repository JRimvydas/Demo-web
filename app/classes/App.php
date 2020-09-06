<?php

namespace App;

use Core\FileDb;

class App
{
    /**
     * @var FileDB
     */
    public static $db;
    public static $session;

    public function __construct(string $file_name)
    {
        self::$db = new FileDb($file_name);
        self::$db->load();
        self::$session = new \Core\Session();
    }

    public function __destruct()
    {
        self::$db->save();
    }
}
