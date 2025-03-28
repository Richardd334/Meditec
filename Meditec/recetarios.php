<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_recetarios.css">
    <title>Meditec - Recetarios</title>
</head>
<body>
<header>
    <h1 class="titulos">Meditec</h1>
    <nav>
        <ul>
            <li class="dashboard"><a href="index.php">Inicio</a></li>
            <li class="dashboard"><a href="historiales.php">Historiales</a></li>
            <li class="dashboard"><a href="generar_historial.php">Generar Historial</a></li>
            <li class="dashboard"><a href="">Generar Recetario</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h1>Generar Recetario Médico</h1>
    
    <form action="guardar_receta.php" method="post">
        <!-- Datos del paciente -->
        <fieldset>
            <legend>Datos del Paciente</legend>
            <div class="form-group">
                <label for="nombre_paciente">Nombre completo:</label>
                <input type="text" id="nombre_paciente" name="nombre_paciente" required>
            </div>
            
            <div class="form-group">
                <label for="edad_paciente">Edad:</label>
                <input type="number" id="edad_paciente" name="edad_paciente" required>
            </div>
            
            <div class="form-group">
                <label for="diagnostico">Diagnóstico:</label>
                <textarea id="diagnostico" name="diagnostico" rows="3" required></textarea>
            </div>
        </fieldset>
        
        <!-- Medicamentos -->
        <fieldset>
            <legend>Medicamentos Recetados</legend>
            <div id="medicamentos-container">
                <div class="medicamento-item">
                    <div class="form-group">
                        <label for="medicamento1">Medicamento:</label>
                        <input type="text" id="medicamento1" name="medicamentos[]" required>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="dosis1">Dosis:</label>
                            <input type="text" id="dosis1" name="dosis[]" required placeholder="Ej: 500mg">
                        </div>
                        
                        <div class="form-group">
                            <label for="frecuencia1">Frecuencia:</label>
                            <input type="text" id="frecuencia1" name="frecuencia[]" required placeholder="Ej: Cada 8 horas">
                        </div>
                        
                        <div class="form-group">
                            <label for="duracion1">Duración:</label>
                            <input type="text" id="duracion1" name="duracion[]" required placeholder="Ej: 7 días">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="indicaciones1">Indicaciones especiales:</label>
                        <textarea id="indicaciones1" name="indicaciones[]" rows="2" placeholder="Ej: Tomar con alimentos"></textarea>
                    </div>
                </div>
            </div>
            
            <button type="button" id="agregar-medicamento" class="btn-secondary">+ Agregar otro medicamento</button>
        </fieldset>
        
        <!-- Estudios o procedimientos -->
        <fieldset>
            <legend>Estudios o Procedimientos</legend>
            <div class="form-group">
                <label for="estudios">Indicar estudios o procedimientos necesarios:</label>
                <textarea id="estudios" name="estudios" rows="3" placeholder="Ej: Biometría hemática, Ultrasonido abdominal"></textarea>
            </div>
        </fieldset>
        
        <!-- Datos del médico -->
        <fieldset>
            <legend>Datos del Médico</legend>
            <div class="form-row">
                <div class="form-group">
                    <label for="nombre_medico">Nombre del médico:</label>
                    <input type="text" id="nombre_medico" name="nombre_medico" required>
                </div>
                
                <div class="form-group">
                    <label for="cedula">Cédula profesional:</label>
                    <input type="text" id="cedula" name="cedula" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="contacto">Contacto:</label>
                <input type="text" id="contacto" name="contacto" placeholder="Teléfono o correo electrónico">
            </div>
        </fieldset>
        
        <div class="form-actions">
            <button type="button" id="previsualizar" class="btn-secondary">Previsualizar Receta</button>
            <button type="submit" class="btn-primary">Guardar Receta</button>
            <button type="button" id="imprimir" class="btn-primary">Imprimir Receta</button>
        </div>
    </form>
    
    <h2 class="subtitulos">Normativa sobre recetas médicas <a href="https://www.gob.mx/salud/documentos/normatividad-en-materia-de-recetas-medicas">Saber más...</a></h2>
</div>

<!-- Modal para previsualización -->
<div id="preview-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="receta-preview">
            <!-- Aquí se cargará la previsualización -->
        </div>
    </div>
</div>

<script src="script_recetarios.js"></script>
</body>
</html>