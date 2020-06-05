<?php
require_once "config.php";

class Conexion {

    private $_CON;
    /**
     * Conexion constructor.
     */
    public function __construct()
    {
        Flight::register('db', 'PDO', array('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS));
        $this->_CON = Flight::db();
    }

    public function get()
    {
        $customers =$this->_CON->query("SELECT * FROM clientes LIMIT 0, 30")->fetch(PDO::FETCH_ASSOC);
        return $customers;
    }

    public function insert($data) {

        $sql = "INSERT INTO clientes (nombre,correo,celular,area,mensaje,tipo,fecha_registro) VALUES(?,?,?,?,?,?,NOW())";
        $sth = Flight::db()->prepare($sql);
        $sth->bindParam(1, $data["name"]);
        $sth->bindParam(2, $data["email"]);
        $sth->bindParam(3, $data["phone"]);
        $sth->bindParam(4, $data["area"]);
        $sth->bindParam(5, $data["message"]);
        $sth->bindParam(6, $data["tipo"]);
        $res = $sth->execute();

        return $res;
    }


    public function getCustomers() {
        $customers =$this->_CON->query("SELECT * FROM clientes ORDER BY id desc")->fetchAll();
        return $customers;
    }
}
