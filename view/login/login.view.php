<?php

use config\Config;
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?=Config::dep_css("main")?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>LOGIN USUARIO</title>

<body>
  <section class="vh-100">

    <div class="container-fluid h-custom">

      <div class="row d-flex justify-content-center align-items-center h-100">

        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="<?= Config::dep_png("logo") ?>" class="img-fluid" alt="Sample image">
        </div>

        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="./validarLogin" method="post">
            <div class="divider d-flex align-items-center my-4">
              <h4 style="font-weight: bold;">INICIA SESIÓN</h4>
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="correo_electronico" style="font-weight: bold;">Correo Electronico</label>
              <input type="text" class="form-control form-control-lg" name="correo_electronico" id="correo_electronico" placeholder="Ingresa un usuario válido" autofocus required>
            </div>

            <div class="form-outline mb-3">
              <label class="form-label" for="password" style="font-weight: bold;">Contraseña</label>
              <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Enter password" required>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?
                <a href="./sigin" class="link-danger">Register</a>
              </p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  </div>

</body>

</html>