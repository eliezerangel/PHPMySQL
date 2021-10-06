<?php
include('db.php');

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM utilizador WHERE id_utilizador=$id";

if ($conn->query($sql) === TRUE) {
  echo "utilizador removido com sucesso";
} else {
  echo "Erro ao eliminar utilizador: " . $conn->error;
}

$conn->close();
?>