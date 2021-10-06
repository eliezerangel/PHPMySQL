<!-- LOGIN -->
<div class="py-5">
  <form action="db/validaruser.php" method="post" class="container p-4 col-md-4" >
      <div  class="d-flex justify-content-center">
        <img class="mb-1 p-2 animate__animated animate__fadeIn" src="img/favicon/android-chrome-512x512.png" alt="" width="96" height="96">
      </div>
      
        <h1 class="h3 mb-3 p-2 fw-normal text-center">Login</h1>
      
      <div class="form-floating m-1">
        <input type="text" class="form-control" id="floatingInput" name="form-username">
        <label for="floatingInput">Username (admin)</label>
      </div>
      
      <div class="form-floating m-1">
        <input type="password" class="form-control" id="floatingPassword" name="form-password">
        <label for="floatingPassword">Password (pass123)</label>
      </div>

      <div class="checkbox mb-3 m-1">
        <label><input type="checkbox" value="remember-me"> Remember me</label>
      </div>
      
      <button class="w-100 btn btn-lg btn-danger m-1" type="submit">Login</button>
  </form>
</div>