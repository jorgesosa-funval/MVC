<?php
 
require_once $_SERVER['DOCUMENT_ROOT']  . '/Models/Libro.php';

class LibroController{
 
    
    function index(){
        $libro = new Libro;
        $libros = $libro->all();

        session_start();
        $_SESSION['libros'] = $libros;

        header('location: ../View/view_libros.php');

    }


}

 