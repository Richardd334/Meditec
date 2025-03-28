<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_registro.css">
    <title>Meditec - Alta de Doctores</title>
</head>
<body>
<header>
    <h1 class="titulos">Meditec</h1>
    <nav>
        <ul>
            <li class="dashboard"><a href="index.php">Inicio</a></li>
            <li class="dashboard"><a href="registro_pacientes.php">Registro Pacientes</a></li>
            <li class="dashboard"><a href="registro_doctores.php">Registro Doctores</a></li>
            <li class="dashboard"><a href="administracion.php">Administración</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h1>Registro de Nuevo Doctor</h1>
    
    <form action="guardar_doctor.php" method="post" id="formulario-doctor">
        <!-- Información personal -->
        <fieldset>
            <legend>Información Personal</legend>
            <div class="form-row">
                <div class="form-group">
                    <label for="nombre">Nombre(s):</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                
                <div class="form-group">
                    <label for="apellido_paterno">Apellido Paterno:</label>
                    <input type="text" id="apellido_paterno" name="apellido_paterno" required>
                </div>
                
                <div class="form-group">
                    <label for="apellido_materno">Apellido Materno:</label>
                    <input type="text" id="apellido_materno" name="apellido_materno">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
                </div>
                
                <div class="form-group">
                    <label>Sexo:</label>
                    <div class="radio-group">
                        <input type="radio" id="masculino" name="sexo" value="masculino" required>
                        <label for="masculino">Masculino</label>
                        
                        <input type="radio" id="femenino" name="sexo" value="femenino">
                        <label for="femenino">Femenino</label>
                    </div>
                </div>
            </div>
        </fieldset>
        
        <!-- Información profesional -->
        <fieldset>
            <legend>Información Profesional</legend>
            <div class="form-row">
                <div class="form-group">
                    <label for="cedula">Cédula Profesional:</label>
                    <input type="text" id="cedula" name="cedula" required 
                           pattern="[0-9]{4,8}" title="Número de cédula profesional">
                </div>
                
                <div class="form-group">
                    <label for="especialidad">Especialidad:</label>
                    <select id="especialidad" name="especialidad" required>
                        <option value="">Seleccione una especialidad</option>
                        <option value="MEDICINA_GENERAL">Medicina General</option>
                        <option value="CARDIOLOGIA">Cardiología</option>
                        <option value="PEDIATRIA">Pediatría</option>
                        <option value="GINECOLOGIA">Ginecología</option>
                        <option value="DERMATOLOGIA">Dermatología</option>
                        <!-- Otras especialidades -->
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="subespecialidad">Subespecialidad (opcional):</label>
                    <input type="text" id="subespecialidad" name="subespecialidad">
                </div>
                
                <div class="form-group">
                    <label for="universidad">Universidad de Egreso:</label>
                    <input type="text" id="universidad" name="universidad" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="anios_experiencia">Años de Experiencia:</label>
                <input type="number" id="anios_experiencia" name="anios_experiencia" min="0" max="70" required>
            </div>
        </fieldset>
        
        <!-- Datos de acceso al sistema -->
        <fieldset>
            <legend>Datos de Acceso al Sistema</legend>
            <div class="form-row">
                <div class="form-group">
                    <label for="usuario">Nombre de Usuario:</label>
                    <input type="text" id="usuario" name="usuario" required 
                           pattern="[a-zA-Z0-9]{5,20}" title="5-20 caracteres alfanuméricos">
                </div>
                
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required 
                           minlength="8" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$"
                           title="Mínimo 8 caracteres, al menos una mayúscula, una minúscula y un número">
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Confirmar Contraseña:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="nivel_acceso">Nivel de Acceso:</label>
                <select id="nivel_acceso" name="nivel_acceso" required>
                    <option value="DOCTOR">Doctor</option>
                    <option value="ADMINISTRADOR">Administrador</option>
                    <option value="RESIDENTE">Residente</option>
                </select>
            </div>
        </fieldset>
<script src="script_doctores.js"></script>
</body>
</html>