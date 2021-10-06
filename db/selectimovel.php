<?php
include('db.php');

$id = $_GET['id'];

$sql    = "SELECT * FROM imovel WHERE id_imovel='$id'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc(); ?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-7">
            <!-- FORM  -->
            <form method="post" class="mx-auto mt-5">
                <input type="text" class="form-control" id="form-id" 
                name="form-id_imovel" value="<?= $row['id_imovel']; ?>" hidden>

                <div class="mb-3">
                    <label for="form-nome" class="form-label" id="form-text">Nome: </label>
                    <input type="text" class="form-control" id="form-nome" 
                    name="form-nome" value="<?= $row['nome']; ?>">
                </div>

                <div class="mb-3">
                    <label for="form-descricao" class="form-label" id="form-text">Descrição: </label>
                    <input type="text" class="form-control" id="form-descricao" 
                    name="form-descricao" value="<?= $row['descricao']; ?>">
                </div>

                <div class="mb-3">
                    <label for="form-localizacao" class="form-label" id="form-text">Localização: </label>
                    <input type="text" class="form-control" id="form-localizacao" 
                    name="form-localizacao" value="<?= $row['localizacao']; ?>">
                </div>

                <div class="mb-3">
                    <label for="form-valor" class="form-label" id="form-text">Valor: </label>
                    <input type="text" class="form-control" id="form-valor" 
                    name="form-valor" value="<?= $row['valor']; ?>">
                </div>
                <div class="col-md my-3">
                <button type="submit" formaction="index.php?p=minhaconta" class="btn btn-dark" id="button-shadow">Voltar</button>
                <button type="submit" formaction="db/updateimovel.php" class="btn btn-dark" id="button-shadow">Alterar</button>    
                <button type="submit" formaction="db/deleteimovel.php" class="btn btn-dark" id="button-shadow">Eliminar</button>
                <button type="submit" formaction="registo.php" class="btn btn-danger" id="button-shadow">Novo Registo</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
} else {
  echo "0 results";
}
$conn->close();
?>
<br>