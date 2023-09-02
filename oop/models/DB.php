<?php

class DB {
    private static $hostname = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "autentikasi_oop";

    public static $db;

    public static function connect()
    {
        self::$db = mysqli_connect(self::$hostname, self::$username, self::$password, self::$database);

        return self::$db;
    }

    // public static function connect()
    // {
    //     return mysqli_connect(self::$hostname, self::$username, self::$password, self::$database);
    // }

    // public static $koneksi;

    // public static function connect()
    // {
    //     self::$koneksi = mysqli_connect(self::$hostname, self::$username, self::$password, self::$database);

    //     if(self::$koneksi->connect_error) {
    //         die("Koneksi bermasalah");
    //     }

    //     return self::$koneksi;
    // }
}