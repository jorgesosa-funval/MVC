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


        try {
            $stm = $this->conexion->prepare($query);
            $stm->bind_param('ssi', $nombre, $correo, $rol_id);

            $stm->execute();
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }


    function login($correo, $password)
    {

        $query = 'SELECT * FROM usuarios WHERE correo = ?';


        try {
            $stm = $this->conexion->prepare($query);
            $stm->bind_param('s', $correo);
            $stm->execute();
            $rs = $stm->get_result();
            $data = $rs->fetch_assoc();

            if (password_verify($data['password'], $password)) {
                return $data;
            }
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }
}

