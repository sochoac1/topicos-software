<?php

//Conectarse a la base de datos
//Al darle boton enviar se conecta a la base de datos
$connection = mysqli_connect("localhost","root","","personas") or die(mysqli_error($mysqli));


//Diferenciar

chooseCommand($connection);
function chooseCommand($connection){
    //Conocer el boton
    if(isset($_POST["enviar"])){
        insert($connection);
    }
    if(isset($_POST["eliminar"])){
        del($connection);
    }
}


//Funcion insertar
function insert($connection){
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $phone = $_POST["phone"];

    //Crear consulta
    $query = "INSERT INTO empleados(Nombre, Apellido, Telefono) VALUES ('$name','$lastName','$phone') ";
    mysqli_query($connection, $query);
    mysqli_close($connection);
    header("Location: index.php");
}

function del($connection){
    $phone = $_POST["phone"];
    $query = "DELETE FROM empleados WHERE Telefono='$phone'";

    mysqli_query($connection, $query);
    mysqli_close($connection);
    header("Location: index.php");
}

function cargarTabala($connection){
    $query = "SELECT * FROM empleados";
    $data = mysqli_query($connection, $query);

    //Mientras tenga resultado, obtenga información
    while($fila = mysqli_fetch_array($data)){
        echo "<tr>";
        echo "<td>".$fila["IDempleado"];
        echo "<td>".$fila["Nombre"];
        echo "<td>".$fila["Apellido"];
        echo "<td>".$fila["Telefono"];
        echo "<tr>";
    }
    mysqli_close($connection);
}

?>