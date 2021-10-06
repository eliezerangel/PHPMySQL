<?php

include('db.php');

//READ DATA LOGIN FROM INDEX
$user     = $_POST['form-username'];
$password = $_POST['form-password'];

//VERIFY DATABASE - LOGIN
$sql = "SELECT * FROM utilizador WHERE username='$user' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
    
  /* VERIFY USER EXISTANCE - DB */
  session_start();
  $_SESSION['id'] = $row['id_utilizador'];
  $_SESSION['username'] = $row['username'];
  header('Location: ../index.php?p=minhaconta');
  
} else {
  echo '<h2>Utilizador ou palavra-passe errados<h2>';
  header('Location: ../index.php?p=login');
}
$conn->close();
?>