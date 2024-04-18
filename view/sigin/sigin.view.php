<?php

use config\Config;

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= Config::dep_css("main") ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>REGISTRO USUARIO</title>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="<?= Config::dep_png("logo") ?>" class="img-fluid" alt="Sample image">
                </div>

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <form id="registroForm" action="./validarRegistro" method="post">
                        <div class="divider d-flex align-items-center my-4">
                            <h4 style="font-weight: bold;">CREA UNA CUENTA</h4>
                        </div>

                        <div class="row form-outline mb-2">
                            <div class="col">
                                <label class="form-label" for="nombre" style="font-weight: bold;">Nombre(s)</label>
                                <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" placeholder="Ingresa tu nombre" autofocus required>
                            </div>
                            <div class="col">
                                <label class="form-label" for="apellido" style="font-weight: bold;">Apellido(s)</label>
                                <input type="text" id="apellido" name="apellido" class="form-control form-control-lg" placeholder="Ingresa tu apellido" required>
                            </div>
                        </div>

                        <div class="row form-outline mb-2">
                            <div class="col">
                                <div class="mb-2">
                                    <label class="form-label" for="sexo" style="font-weight: bold;">Sexo</label>
                                    <select id="sexo" name="sexo" class="form-select" required>
                                        <option selected value="No definido">Prefiero no decirlo</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-4">
                                    <label class="form-label" for="fecha_nacimiento" style="font-weight: bold;">Fecha de Nacimiento</label>
                                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="correo_electronico" style="font-weight: bold;">Correo Electronico</label>
                            <input type="email" id="correo_electronico" class="form-control form-control-lg" placeholder="Ingresa un correo electronico" name="correo_electronico" required>
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="usuario" style="font-weight: bold;">Usuario</label>
                            <input type="text" id="usuario" class="form-control form-control-lg" placeholder="Ingresa un usuario válido" name="usuario" required>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="password" style="font-weight: bold;">Contraseña</label>
                            <input type="password" id="password" class="form-control form-control-lg" placeholder="Ingrese una contraseña" name="password" required>
                        </div>

                        <div class="row form-outline mb-2">
                            <div class="col">
                                <button type="submit" class="btn btn-dark">Registar</button>
                            </div>
                            <div class="col">
                                <p class="small fw-bold mt-2 pt-1 mb-0">¿Ya tienes una cuenta? <a href="./login" class="link-danger">Inicia sesión</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="<?= Config::dep_js("validaciones.sigin") ?>"></script>

</html>