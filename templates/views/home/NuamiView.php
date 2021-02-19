<?php require_once INCLUDES.'inc_header.php'; ?>

<nav class="navbar navbar-light bg-header">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">
      <img src="<?php echo IMAGES.'escudo.svg' ?>" alt="" width="35" height="35" class="d-inline-block align-top mr-2">
      gob.pe | COVID 19
    </a>
  </div>
</nav>

<div class="container content-login">
  <div class="row">
    <div class="col-12 col-md-10 ocultar-img">
      <img src="<?php echo UPLOADS.'banner1.jpg' ?>" class="img-fluid" alt="image">
    </div>
    <div class="col-12 col-md-2">
      <div class="card card-login mt-4">
        <div class="card-body">
          <h3 class="text-center font-weight-bold" style="color: #43425D;">INICIAR SESIÓN</h3>
          <h5 class="text-center" style="color: #43425D;opacity: 0.5;">Solo personal Administrativo</h5>
          <form class="mt-4" method="post" action="home/dashboard">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" placeholder="" autofocus>
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" placeholder="********">
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Remember me
              </label>
            </div>
            <div class="text-center mt-4">
              <button type="submit" class="btn btn-primary btn-lg" style="margin:auto; background: #43425D !important;border:  #43425D 2px solid;">LOGIN</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once INCLUDES.'inc_footer.php'; ?>
