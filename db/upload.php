<!--
<?php
include('db.php');

$id           = $_POST['form-id_imovel'];
$nome         = $_POST['form-nome'];
$localizacao  = $_POST['form-localizacao'];
$descricao    = $_POST['form-descricao'];
$valor        = $_POST['form-valor'];

$sql = "INSERT INTO imovel (id_imovel, nome, localizacao, descricao, valor) VALUES ('$id','$nome','$localizacao','$descricao','$valor');";

if ($conn->query($sql) === TRUE) {
  //Insert com sucesso - reload da pagina minha conta para gestao
  header('refresh:1');
  header('Location: ../index.php?p=minhaconta');
  
} else {
  //echo "Erro ao registar, a ser redirecionado";
  header('refresh:1;url=../registo.php');
}

$conn->close();
?>-->