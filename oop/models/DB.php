<?php

class DB {
    private static $hostname = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "Autentikasi_oop";

    public static $koneksi;

    public static function connect()
    {
        self::$koneksi = mysqli_connect(self::$hostname, self::$username, self::$password, self::$database);

        if(self::$koneksi->connect_error) {
            die("Koneksi bermasalah");
        }

        return self::$koneksi;
    }
}