<?php
        if( isset($_GET["accion"])){
            if($_GET["accion"] == "asignar"){
                require_once 'Vista/html/asignar.php'; 
            }
            if($_GET["accion"] == "consultar"){
                require_once 'Vista/html/consultar.php'; 
            }
            if($_GET["accion"] == "cancelar"){
                require_once 'Vista/html/cancelar.php'; 
            }
        } else {
            require_once 'Vista/html/inicio.php';
        }
?> 

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio Medico</title>
    <link rel="stylesheet" href="Vista/style/style.css">
</head>
<body>
    <main class="contenedor" >
        <header class="encabezado">
            <h1 class="titulo">Sistema de Gestion</h1>
            <h1 class="titulo">Medica</h1>
        </header>    
        <ul class="menu">
            <li> <a href="">Inicio</a> </li>
            <li> <a href="">Asignar</a> </li>
            <li> <a href="">Consultar Cita</a> </li>
            <li> <a href="">Cancelar Cita</a></li>
        </ul>
        <section class="contenido">
            <h2>Título de página</h2>
            <p>Contenido de la página</p>
        </section>
    </main>
     
</body>
</html> -->