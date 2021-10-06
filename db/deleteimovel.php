<?php
include('db.php');

$id=$_POST['form-id_imovel'];

$sql = "DELETE FROM imovel WHERE id_imovel=$id";

if ($conn->query($sql) === TRUE) {
  //echo "Imovel com sucesso, a ser redirecionado";
  header('refresh:1;');
  header('Location: ../index.php?p=minhaconta');
} else {
  //echo "Erro ao eliminar imovel, a ser redirecionado";
  header('refresh:1;');
  header('Location: ../index.php?p=minhaconta');
}

$conn->close();
?>