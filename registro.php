<?php

try {

$pdo = new PDO("mysql:host=localhost;dbname=biblioteca","root","");

$user = trim($_POST['user']);
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

$stmt = $pdo->prepare(
"INSERT INTO usuarios(usuario,password)
VALUES(?,?)"
);

$stmt->execute([$user,$pass]);

echo "Usuario registrado";

} catch(PDOException $e){
echo "Error: ".$e->getMessage();
}

?>

