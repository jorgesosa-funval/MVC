<?php 



if(isset($_GET['action']) && isset($_GET['controller'])){

    require_once './Controllers/' . $_GET['controller'] . '.php';

    $libroController = new $_GET['controller'];

    $libroController->{$_GET['action']}();
    


}else{
    require_once './Controllers/LibroController.php';
    $libroController = new LibroController;
    $libroController->index();
}