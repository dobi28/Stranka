<?php
/**
 * Created by PhpStorm.
 * User: Adrián
 * Date: 31.8.2018
 * Time: 11:13
 */

class Db
{
    public static $conn;


    public static function createConn()
    {
        if (!isset(self::$conn))
        {
            self::$conn = new PDO("mysql:host=localhost;dbname=gacov_beladice", "root");
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

    }

    public static function closeConn() {
        self::$conn->close();
    }

    public static function insertUser($pName, $pPass)
    {
        if (isset(self::$conn)) {
            $stmt = self::$conn->prepare("INSERT INTO users (username, user_pass) VALUES (:name, :value)");
            $stmt->bindParam(':name', $pName);
            $stmt->bindParam(':value', $pPass);
            $stmt->execute();
        }
    }




}