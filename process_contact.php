<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dblibreria";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $correo = $_POST["email"];
    $telefono = $_POST["phone"];
    $comentario = $_POST["message"];

   
    $sql = "INSERT INTO contacto (nombre, correo, telefono, comentario) VALUES ('$nombre', '$correo', '$telefono', '$comentario')";

    
    if ($conn->query($sql) === TRUE) {
        
        header("Location: success_page.html");
        exit;
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();

ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
