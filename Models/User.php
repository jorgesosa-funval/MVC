<?php
require_once './Database.php';
class User
{
    private $conexion;

    public function __construct()
    {
        $database = new Database();

        $this->conexion = $database->getConn();
 
    }

    function  create($nombre, $correo, $rol_id)
    {

        $query  = 'INSERT INTO usuarios (`nombre`, `correo`, `rol_id`) VALUES (?,?,?)';

        $stm = $this->conexion->prepare($query);
        try {
            $stm->bind_param('ssi', $nombre, $correo, $rol_id);

            $stm->execute();
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }

}


$user = new User();

$user->create('Jorge Sosa', 'joregesosa@gmail.com', 1);
