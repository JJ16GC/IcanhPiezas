<?php
session_start();
class Conectar
{
    # Clase Conexion a la base de datos

    protected $dbh;
    protected function Conexion()
    {
        try {
            # Establece la conexion
            $conectar = $this->dbh = new PDO("mysql:host=localhost:3306;dbname=icanh_bd", "root", "");
            return $conectar;
        } catch (Exception $e) {
            # Muestra error por si no se pudo conectar a la base de datos
            print "!Error al conectar a la BD! :" . $e->getMessage() . "</br>";
            die();
        }
    }
    public function set_names()
    # Garantiza que se obtengan los datos en utf8
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
    public static function ruta()
    {
        # Ruta de redireccion por defecto
        return "http://localhost/icanh/";
    }
}
