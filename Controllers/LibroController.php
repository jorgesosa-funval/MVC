<?php

require_once $_SERVER['DOCUMENT_ROOT']  . '/Models/Libro.php';

class LibroController
{


    function index()
    {
        $libro = new Libro;
        $libros = $libro->all();

        session_start();
        
        $_SESSION['libros'] = $libros;

        header('location: ../View/view_libros.php');
    }

    function create()
    {
        $libro = new Libro;
        $autores = $libro->autores();
        $generos = $libro->generos();
        
        session_start();

        $_SESSION['autores'] = $autores;
        $_SESSION['generos'] = $generos;
        header('location: ../View/view_new_libro.php');
    }

    function store()
    {   
        
        $libro = new Libro;
        $libro->create($_POST['titulo'], $_POST['autor'],$_POST['genero'], $_POST['stock']);

        header('location: ../index.php');
    }
}
