<!-- FORM AND LEFT TEXT MESSAGE -->

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3" style="color: white" id="contact">Contacte-nos</h1>
          <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
      
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="post" action="email.php">      
          <div>
            <label for="InputNome" class="form-label" id="form-text">Nome:</label>
            <input type="text" class="form-control" id="InputNome" name="nome" placeholder="Insira o seu nome">
          </div>
          <div>
            <label for="InputContacto" class="form-label" id="form-text">Contacto:</label>
            <input type="text" class="form-control" id="InputContacto" name="contacto" placeholder="Insira o seu contacto">
          </div>
          <div>
            <label for="exampleInputEmail1" class="form-label" id="form-text">Endereço de e-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="seu-email@email.com">
          </div>
            <div>
            <label for="exampleFormControlTextarea1" class="form-label" id="form-text">Pedido de Informações:</label>
            <textarea class="form-control" id="form-control" name="mensagem" rows="3"></textarea>
          </div>
          <div class="d-flex justify-content-end mt-3"><button type="submit" class="btn btn-danger" data-bs-toggle="form" data-bs-target="form">Enviar</button> </div>
        </form> 
      </div>

    </div>
  </div>
  
  <!--FORM VALIDATION AND ANSWER (MODAL) FOR USER-->   
      
  <?php 
      if (isset($_GET['e']) && $_GET['e']=='enviado')
      echo '
      <div  class="container">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Até Já! </strong>Recebemos a sua mensagem, em breve entraremos em contacto.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>';
      
      if (isset($_GET['e']) && $_GET['e']=='erro')
      echo ' <div  class="container">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ATENÇÃO! </strong> Erro ao enviar o e-mail, tente novamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>';
  ?> 