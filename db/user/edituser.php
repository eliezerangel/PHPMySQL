<?php

include('db.php');

$id = $_GET['id'];
$user = $_POST['form-username'];
$password = $_POST['form-password'];
$name = $_POST['form-nome'];
$email = $_POST['form-email'];

$sql = "UPDATE utilizador SET username='$user', password='$password', name='$name', email='$email' WHERE id_utilizador=$id";

if ($conn->query($sql) === TRUE) {
  echo "Dados do utilizador alterados co sucesso";
} else {
  echo "Erro ao editar dados do utilizador" . $conn->error;
}

$conn->close();
?>