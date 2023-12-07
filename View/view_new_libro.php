<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Nuevo Libro</title>
    
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button,
        .return-btn {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover,
        .return-btn:hover {
            background-color: #45a049;
        }

        .return-btn {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
<body>

    <h2>Nuevo Libro</h2>

    <a href="#" class="return-btn">Return</a>

    <form action="#" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="autor">Autor:</label>
        <select id="autor" name="autor" required>
            <option value="J.R.R. Tolkien">J.R.R. Tolkien</option>
            <option value="Gabriel García Márquez">Gabriel García Márquez</option>
            <option value="J.K. Rowling">J.K. Rowling</option>
            
        </select>

        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
            <option value="Fantasía">Fantasía</option>
            <option value="Realismo Mágico">Realismo Mágico</option>
            <option value="Ficción">Ficción</option>
 
        </select>

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required>

        <button type="submit">Agregar Libro</button>
    </form>

</body>

</html>