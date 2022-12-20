<?php
$email = $_REQUEST["email"];
$name = $_REQUEST["name"];
$password = $_REQUEST["password"];
$connection = mysqli_connect("localhost", "root", "", "usuarios");

$sql = "INSERT INTO usuario (nombre, email, pass) VALUES ('$name', '$email', '$password')";
$query = mysqli_query($connection, $sql);
if ($query){
    echo("se inserto correctamente");
}else {
    echo ("error");
}

?>