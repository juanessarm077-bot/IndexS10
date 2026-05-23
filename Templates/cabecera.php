<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
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
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"  />

    </head>
    <body>
        <nav class="navbar navbar-expand navbar-light bg-light">
                    <div class="nav navbar-nav">
                        <a class="nav-item nav-link active" href="Index.php">Inicio</a>
                        <a class="nav-item nav-link" href="vista_alumnos.php">Alumnos</a>
                        <a class="nav-item nav-link" href="vista_cursos.php">Cursos</a>
                        <a class="nav-item nav-link" href="cerrar.php">Cerrar sesion</a>
                    </div>
                </nav>
       <div class="container">
        <div class="row">
            <div class="col-md-12">
               <br/>
               <div class="row"></div>