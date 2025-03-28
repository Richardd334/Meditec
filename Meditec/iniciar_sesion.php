<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_inicioS.css">
    <title>MediTec</title>
</head>
<body>
    <section>
        <div class="login-container">
            <div class="login-title">Iniciar Sesión</div>
            
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <a href="index.php"><button type="submit" class="login-button">Ingresar</button></a>
                
                <div class="links">
                    <a href="#">¿Olvidaste tu contraseña?</a> | 
                    <a href="#">Registrarse</a>
                </div>
            </form>
        </div>
    </section>
</body>
</body>
</html>