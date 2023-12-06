<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #perfil {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        #perfil input {
            width: 80%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #perfil button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #perfil button:hover {
            background-color: #45a049;
        }

        .edit-mode input {
            border: 1px solid #4caf50;
        }
    </style>
</head>
<body>

<div id="perfil">
    <h2>Mi Perfil</h2>
    <form id="formulario">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="John" readonly>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" value="Doe" readonly>

        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
        <input type="text" id="fechaNacimiento" name="fechaNacimiento" value="01/01/1990" readonly>

        <button type="button" >Editar</button>
    </form>
</div>

</body>
</html>
