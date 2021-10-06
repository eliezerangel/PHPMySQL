<?php
include('db.php');

$sql = "SELECT * FROM imovel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
?>  
    <div class="container py-2">
    <div class="row ms-3">
<?php
  while($row = $result->fetch_assoc()) {
    $id = $row['id_imovel'];
    $sql1 = "SELECT nome FROM upload WHERE id_imovel=$id LIMIT 1";
    $result1 = $conn->query($sql1);

?>  
  <div class="col-md-3 gy-3 gx-1 d-flex-content">
    <div class="card" style="width: 18rem;">
    <?php 
    if($result1!=null && $result1->num_rows == 1)  {
        $row1 = $result1->fetch_assoc();
        $n = $row1['nome'];
        echo '<img src="uploads/'.$n.'" class="card-img-top" style="height:200px" alt="...">';
    }else{
        echo '<img src="img/casa-azul.jpg" class="card-img-top"  style="height:200px" alt="...">';
    }?>
          <div class="card-body">
          <h5 class="card-title fs-5 fw-bold"><?= $row['nome']?></h5>
          <p class="card-text fs-5 fw-bold">Valor: <?= $row['valor']?></p>
        </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Descrição: <?= $row['descricao']?></li>
            <li class="list-group-item">Localização: <?= $row['localizacao']?></li>
            <li class="list-group-item">Refª: <?= $row['id_imovel']?></li>
          </ul>
      </div>
  </div>  
<?php
  }
  echo "      
     </div></div></div>";
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
