<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_index.css">
    <title>Meditec</title>
</head>

<body>
    <header>
        <h1 class="titulos">Meditec</h1>
        <nav>
            <ul>
                <li class="dashboard"><a href="index.php">Inicio</a></li>
                <li class="dashboard"><a href="index_inicio.php">Historiales</a></li>
                <li class="dashboard"><a href="historiales.php">Generar Historial</a></li>
                <li class="dashboard"><a href="recetarios.php">Generar Recetario</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h2 class="subtitulos">Bienvenido a Meditec</h2>
        <p class="parrafo">Meditec es una plataforma que te permite llevar un control de tus historiales médicos y
            recetarios de manera digital.</p>
        <div class="buscar">
        
            <h2>Buscar Paciente</h2>
                    
            <form action="#" method="post">
                <input type="text" name="user" id="user" placeholder="Buscar...">
                <button type="submit" class="login-button" id="ingresar-button">Ingresar</button>
            </form>
            

        </div>

        <div id="Usuarios encontrados">
        <?php

use Dom\Document;

            $user="";
            function buscar(){
             
            }

            $usuario="Juan Perez"


            
        ?>
        </div>

    </section>
</body>

</html>