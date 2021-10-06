<?php
include('db.php');

$id           = $_POST['form-id_imovel'];
$nome         = $_POST['form-nome'];
$localizacao  = $_POST['form-localizacao'];
$descricao    = $_POST['form-descricao'];
$valor        = $_POST['form-valor'];

$sql = "UPDATE imovel SET nome='$nome', descricao='$descricao', localizacao='$localizacao', valor='$valor' WHERE id_imovel=$id";

if ($conn->query($sql) === TRUE) {
  //echo "Utilizador editado com sucesso, a ser redirecionado";
  header('refresh:1;');
  header('Location: ../index.php?p=minhaconta');
} else {
  //echo "Erro ao editar, a ser redirecionado";
  header('refresh:1;');
  header('Location: ../index.php?p=minhaconta');
}

$conn->close();
?>