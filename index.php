<?php 



if(isset($_GET['action']) && isset($_GET['controller'])){



}else{
    require_once './Controllers/LibroController.php';
    $libroController = new LibroController;
    $libroController->index();
}