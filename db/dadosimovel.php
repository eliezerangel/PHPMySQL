<?php
include('db.php');

$sql = "SELECT * FROM imovel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
    <div class="container">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-1 list-group-item" style="text-align:center;"><strong>ID</strong></div>
        <div class="col-sm-2 list-group-item"><strong>Nome</strong></div>
        <div class="col-sm-5 list-group-item"><strong>Descrição</strong></div>
        <div class="col-sm-2 list-group-item"><strong>Localização</strong></div>
        <div class="col-sm-1 list-group-item" style="text-align:center;"><strong>Preço</strong></div>        
    </div>
    
<?php

  while($row = $result->fetch_assoc()) {
?>  
    <form action="editarimovel.php?id=<?=$row['id_imovel'];?>" method="post">
      <div class="row">
        <div class="col-sm-1">      
        <button type="submit" class="btn btn-dark" id="button-shadow">Selecionar</button>
        </div>
        <div class="col-sm-1 list-group-item fs-6" style="margim: 1px; text-align:center"><?= $row['id_imovel'];?></div>
        <div class="col-sm-2 list-group-item" style="font-size: 14px"><?= $row['nome']?></div>
        <div class="col-sm-5 list-group-item" style="font-size: 14px"><?= $row['descricao']?></div>
        <div class="col-sm-2 list-group-item" style="font-size: 14px"><?= $row['localizacao']?></div>
        <div class="col-sm-1 list-group-item" style="text-align:end; font-size: 14px"><?= $row['valor']?></div>
      </div>                  
</form>
<?php
  }
  echo '</div>';  
} else {
  echo '<div  class="container">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>OPS! </strong> não encontramos o que procurava, tente novamente.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>';
}
$conn->close();
?>
<br>