<?php
$host = "localhost";
$dbuser = "root";
$dbpwd = "";
$db = "coldpeace";

// Conexión al servidor
$connect = mysqli_connect($host, $dbuser, $dbpwd);
if (!$connect) {
    die("No se ha podido conectar al servidor: " . mysqli_connect_error());
}

// Selección de la base de datos
if (!mysqli_select_db($connect, $db)) {
    die("No se ha podido seleccionar la base de datos: " . mysqli_error($connect));
}

echo "Conexión exitosa y base de datos seleccionada.";
?>
