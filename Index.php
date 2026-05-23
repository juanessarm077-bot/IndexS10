<?php
session_start();

if ($_POST) {

$mensaje='Usuario o contraseña incorrecta';

    if (($_POST['usuario'] == "develoteca") && ($_POST['password'] == "admin")) {
        $_SESSION['usuario'] =$_POST['usuario'];
        header("Location:Secciones/index.php");   
}
}


?>


<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>
    <body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
              </div>
              <div class="col-md-4">
                <br>
                <form action="" method="post">

                    <div class="card">
                    <div class="card-header">
                        Inicio de sesion
                    </div>
                    <div class="card-body">

                 <?php if (isset($mensaje)) { ?>
    <div class="alert alert-danger" role="alert">
        <?= $mensaje ?>
    </div>
<?php } ?>



                     <div class="mb-3">
                        <label for="" class="form-label">Usuario</label>
                        <input
                            type="text"
                            class="form-control"
                            name="usuario"
                            id="usuario"
                            aria-describedby="helpId"
                            placeholder="user"
                        />
                        <small id="helpId" class="form-text text-muted">Escriba su usuario</small>

                     </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Contraseña</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            id="password"
                            aria-describedby="helpId"
                            placeholder="password"
                        />
                        <small id="helpId" class="form-text text-body-secondary"
                            >Escriba su contraseña</small>
                     </div>
                     <button type="submit" class="btn btn-primary">Iniciar Sesion</button>

                    </div>
                    
                    </form>
                    
                 </div> 
            </div>
         </div>

        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
