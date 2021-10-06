<?php

include('db.php');

$user = $_POST['form-username'];
$password = $_POST['form-password'];
$name = $_POST['form-nome'];
$email = $_POST['form-email'];

// Create connection
$sql = "INSERT INTO utilizador( username, password, email, nome, id_TipoUtilizador)
VALUES ('$user', '$password', '$email', '$name', 20)";

if ($conn->query($sql) === TRUE) {
  echo "Utilizador registado com sucesso";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>