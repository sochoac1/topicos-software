<?php include("./conexion.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="center">
        <h1 class="main">Trabajo de topicos</h1>
    </div>
        <div class="login">
            <div class="form-container">
                <h1 class="title">Crea un registro !!</h1>
                <p class="subtitle">Ingresa los datos, se guardaran en la base de datos.</p>
                <form action="conexion.php" class="form" method="post">
                    <label for="name-label" class="label">Nommbre</label>
                    <input type="text" name="name" id="name" placeholder="Ingrese nombre" class="input input-name">
                    <label for="last-name-label" class="label">Apellido</label>
                    <input type="text" name="lastName" id="last-name" placeholder="Ingrese apellido" class="input input-last-name">
                    <label for="phone-label" class="label">Numero</label>
                    <input type="text" name="phone" id="phone" placeholder="Ingrese nombre" class="input input-phone">
    
                    <button type="submit" name="enviar" class="primary-button send">Enviar</button>
                    <button type="submit" name="eliminar" class="primary-button delete">Eliminar</button>
                </form>
            </div>
        </div>

    <!-- <form action="conexion.php" method="post">
        <input type="text" name="name" placeholder="Nombre">
        <input type="text" name="lastName" placeholder="Apellido">
        <input type="text" name="phone" placeholder="Celular">
        <button type="submit" name="enviar">Enviar</button>
        <button type="submit" name="eliminar">Eliminar</button>
    </form> -->
    <div class="table-container">
        <table>
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
            </thead>
            <tbody>
                <?=cargarTabala($connection) ?>
    
            </tbody>
        </table>
    </div>
</body>
</html>