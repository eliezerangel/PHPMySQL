<?php
include('db.php');

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$id           = $_POST['form-id_imovel'];
$nome         = $_POST['form-nome'];
$localizacao  = $_POST['form-localizacao'];
$descricao    = $_POST['form-descricao'];
$valor        = $_POST['form-valor'];
session_start();
$id_utilizador = $_SESSION['id'];
$nomeImagem = basename($_FILES["fileToUpload"]["name"]);

$sql = "INSERT INTO imovel (id_imovel, nome, localizacao, descricao, valor) VALUES ('$id','$nome','$localizacao','$descricao','$valor');";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;


  $sql1 = "INSERT INTO upload (nome, id_imovel) VALUES('$nomeImagem','$last_id');";
  if ($conn->query($sql1) === TRUE) {
    //echo "Insert com sucesso, a ser redirecionado";
    header('refresh:1');
    header('Location: ../index.php?p=minhaconta');
  }else{
    header('refresh:1;url=../registo.php');
  }
} else {
  //echo "Erro ao registar, a ser redirecionado";
  header('refresh:1;url=../registo.php');
}

$conn->close();
?>