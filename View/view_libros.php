<?php

session_start();
if (isset($_SESSION['libros'])) {
    $libros = $_SESSION['libros'];
 
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .nuevo-libro-btn {
            display: inline-block;
            padding: 10px;
            margin-top: 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h2>Lista de Libros</h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Cantidad Disponible</th>
                <th>Autor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $libro) : ?>
                <tr>
                    <td><?= $libro['id'] ?></td>
                    <td><?= $libro['titulo'] ?></td>
                    <td><?= $libro['stock'] ?></td>
                    <td><?= $libro['autor'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="#" class="nuevo-libro-btn">Nuevo Libro</a>

</body>

</html>