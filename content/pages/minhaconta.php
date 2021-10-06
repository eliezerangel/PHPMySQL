
<div class="container">
    <div class="px-4 py-1 my-3 text-end">    
        <h3 class="fw-bold" id="title">Minha Conta</h3>
    </div> 
</div> 

<?php
  if (!isset($_SESSION['id']))
  { 
      header('Location: index.php');
  }   
  else
  {
include('db/dadosimovel.php');
  }
?>




