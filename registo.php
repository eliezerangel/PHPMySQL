<?php
include('content/head.php');
include('content/header.php');
include('content/navauth.php');?>

<div class="container">
    <div class="px-4 py-1 my-3 text-end">    
        <h3 class="fw-bold" id="title">Novo Registo</h3>
    </div> 
</div>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-7">
            <!--FORM -->
            <form method="post" class="mx-auto mt-5 container" enctype="multipart/form-data">
                <input type="text" class="form-control" id="form-id" name="form-id_imovel" 
                value="" hidden>

                <div class="mb-3">
                    <label for="form-nome" class="form-label" id="form-text">Nome: </label>
                    <input type="text" class="form-control" id="form-nome" name="form-nome" 
                    value="">
                </div>

                <div class="mb-3">
                    <label for="form-descricao" class="form-label" id="form-text">Descrição: </label>
                    <input type="text" class="form-control" id="form-descricao" name="form-descricao" 
                    value="">
                </div>

                <div class="mb-3">
                    <label for="form-localizacao" class="form-label" id="form-text">Localização: </label>
                    <input type="text" class="form-control" id="form-localizacao" name="form-localizacao" 
                    value="">
                </div>

                <div class="mb-3">
                    <label for="form-valor" class="form-label" id="form-text">Valor: </label>
                    <input type="text" class="form-control" id="form-valor" name="form-valor" 
                    value="">
                </div>                
                <div class="mb-3">
                    <label for="form" class="form-label" id="form-text">Select image to upload:</label>
                    <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <br>
                <button type="submit" formaction="index.php?p=minhaconta" class="btn btn-dark" id="button-shadow">Voltar</button>    
                <button type="submit" formaction="db/insertimovel.php" class="btn btn-danger" id="button-shadow">Registar</button>
            </form>
        </div>
    </div>
</div>
<br>  
<?php
include('content/footer.php');
?>