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

    public function autores()
    {
        $query = "SELECT id, nombre_autor as autor from autores";

        $stm = $this->conexion->prepare($query);

        $stm->execute();
        $rs = $stm->fetchAll(PDO::FETCH_ASSOC);

        return  $rs;
    }

    public function generos()
    {
        $query = "SELECT * FROM generos";

        $stm = $this->conexion->prepare($query);
        $stm->execute();
        $rs = $stm->fetchAll(PDO::FETCH_ASSOC);

        return  $rs;
    }


    function  create($titulo, $autor_id, $genero_id, $stock)
    {

        $query  = 'INSERT INTO libros (`titulo`, `autor_id`, `genero_id`, `stock`) VALUES (?,?,?,?)';


        try {

            $stm = $this->conexion->prepare($query);
            $stm->execute([$titulo, $autor_id, $genero_id, $stock]);
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }
}
