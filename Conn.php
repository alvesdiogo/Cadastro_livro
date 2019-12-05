<?php

/**
 * Sempre que usar static, passar nas conexões self::
 * Atributos podem ser, public, protected ou private
 * 
 */

class Conn
{
    public static $_host = "localhost";
    public static $_user = "root";
    public static $_pass = "root";
    public static $_dbName = "db_livros";
    private static $_connect = null;

    private static function Conectar()
    {
        try {
            if (self::$_connect == null) :
                self::$_connect = new PDO('mysql:host=' . self::$_host . ';dbname=' . self::$_dbName, self::$_user, self::$_pass);
            endif;
        } catch (Exception $ex) {
            echo 'Mensagem: ' . $ex->getMessage();
            die;
        }

        return self::$_connect;
    }

    public function getConn()
    {
        return self::Conectar();
    }
}
