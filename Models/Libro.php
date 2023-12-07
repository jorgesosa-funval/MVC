<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Models/Database.php';
class Libro
{
    private $conexion;

    public function __construct()
    {
        $database = new Database();

        $this->conexion = $database->getConn();
    }

    public function all()
    {
        $query = "SELECT libros.id, libros.titulo, libros.stock, autores.nombre_autor as autor from libros LEFT JOIN autores on libros.autor_id = autores.id";

        $stm = $this->conexion->prepare($query);
        $stm->execute();
        $rs = $stm->fetchAll(PDO::FETCH_ASSOC);

        return  $rs;
    }

    function  create()
    {

        $query  = 'INSERT INTO libros (`titulo`, `autor_id`, `genero_id`, `stock`) VALUES (?,?,?,?)';


        try {

            $stm = $this->conexion->prepare($query);
            $stm->execute();
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }
}
 