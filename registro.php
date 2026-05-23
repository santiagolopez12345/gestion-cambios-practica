<?php

$conn = mysqli_connect("localhost","root","","biblioteca");

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = "INSERT INTO usuarios VALUES ('$user','$pass')";

mysqli_query($conn,$query);

echo "Usuario registrado";

?>
