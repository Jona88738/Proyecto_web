



<!DOCTYPE html>
<html lang="esp">

<head>

     <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="css/estilos-sesion.css" type="text/css">
    <meta http-equiv="Cache-control" content="no-cache, mustrevalidate">
    
</head>

<body>
    <header class="head">
        <h1 id="titulo">Tienda de cuarzos</h1>
      <nav class="head-nav">

        

        <ul class="nav-elementos">
            <li> <a href="./inicio.html">Inicio</a></li>
            <li> <a href="./Sesion.html">Sesion</a></li>
            <li> <a href="./Cuarzos.html">Cuarzos</a></li>
            <li> <a href="./futuros_productos.html">Futuros productos</a></li>
        </ul>
      </nav>
    </header>
    <main class="contenedor-main">
    <div class="formulario">

        <form class="formulario-contenedor" action="login/authenticate" method="post">
            <h1>Registro de cuenta</h1>
            <p class="contenedor-dato">

                <label>Usuario:</label>
                <br/>
                <input type="text" name="nombre" autocomplete="off">
            
            <br/>

            
               <label>Contraseña:</label>
               <br/>

               <input type="password" name="contraseña">
            </p>
            <br/>

            <button id="boton-ingresar" type="submit" value="ingresar">Ingresar</button>

        </form>
        <div id="boton-crear">
            <button id="boton" onclick="location.href=''"  type="submit">Crear cuenta nueva</button>
        </div>

        

    </div>


    </main>


</body>

</html>
<?php
?>