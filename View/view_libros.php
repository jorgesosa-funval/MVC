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

        th, td {
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
            <tr>
                <td>1</td>
                <td>El señor de los anillos</td>
                <td>10</td>
                <td>J.R.R. Tolkien</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Cien años de soledad</td>
                <td>5</td>
                <td>Gabriel García Márquez</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Harry Potter y la piedra filosofal</td>
                <td>8</td>
                <td>J.K. Rowling</td>
            </tr>
        </tbody>
    </table>

    <a href="#" class="nuevo-libro-btn">Nuevo Libro</a>

</body>
</html>
