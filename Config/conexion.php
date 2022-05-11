<?php
session_start();
class Conectar
{
    
    protected $dbh;
    protected function Conexion()
    {
        try {
            //$conectar = $this->dbh = new PDO("mysql:host=localhost:3306;dbname=icanh_bd", "root", "");
            $db_info = array(
                'host' => 'u40ju35ku9wk.us-east-4.psdb.cloud',
                'name' => 'icanh_bd',
                'user' => 'zargqmfsla0l',
                'pass' => 'pscale_pw_xV9I5gupc2c9cUw8oNrzX-gmyO_3g4kfp_HRmfKc9TA',
                'opts' => array(
                PDO::MYSQL_ATTR_SSL_CA => '/path/to/ssl-cert.pem',
                PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
                )
                );
            $conectar = $this->dbh = new PDO( 'mysql:host=' . $db_info['host'] . ';dbname=' . $db_info['name'], $db_info['user'], $db_info['pass'], $db_info['opts'] );
            
            return $conectar;
        } catch (Exception $e) {
            print "!Error al conectar a la BD! :" . $e->getMessage() . "</br>";
            die();
        }
    }
    public function set_names()
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
    public static function ruta()
    {
        return "http://localhost/Trabajo/icanh/";
    }
}
