<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_historiales.css">
    <title>Meditec</title>
</head>
<body>
<header>
        <h1 class="titulos">Meditec</h1>
        <nav>
            <ul>
                <li class="dashboard"><a href="index.php">Inicio</a></li>
                <li class="dashboard"><a href="">Historiales</a></li>
                <li class="dashboard"><a href="historiales.php">Generar Historial</a></li>
                <li class="dashboard"><a href="">Generar Recetario</a></li>
            </ul>
        </nav>
    </header>
<div class="container">
    <h1>Generar Historial Clínico</h1>
    
    <form action="guardar_historial.php" method="post">
        <!-- Datos generales -->
        <fieldset>
            <legend>Datos Generales del Paciente</legend>
            <div class="form-group">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required>
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
        </fieldset>
        
        <!-- Antecedentes heredo-familiares -->
        <fieldset>
            <legend>Antecedentes Heredo-Familiares</legend>
            
            <div class="form-group">
                <label>Diabetes:</label>
                <div class="radio-group">
                    <input type="radio" id="diabetes_si" name="diabetes_familiar" value="si">
                    <label for="diabetes_si">Sí</label>
                    
                    <input type="radio" id="diabetes_no" name="diabetes_familiar" value="no" checked>
                    <label for="diabetes_no">No</label>
                </div>
            </div>
            
            <div class="form-group">
                <label>Hipertensión arterial:</label>
                <div class="radio-group">
                    <input type="radio" id="hipertension_si" name="hipertension_familiar" value="si">
                    <label for="hipertension_si">Sí</label>
                    
                    <input type="radio" id="hipertension_no" name="hipertension_familiar" value="no" checked>
                    <label for="hipertension_no">No</label>
                </div>
            </div>
            
            <!-- Más antecedentes según norma mexicana -->
        </fieldset>
        
        <!-- Antecedentes personales patológicos -->
        <fieldset>
            <legend>Antecedentes Personales Patológicos</legend>
            
            <div class="form-group">
                <label>Enfermedades crónicas:</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="diabetes" name="enfermedades[]" value="diabetes">
                    <label for="diabetes">Diabetes</label>
                    
                    <input type="checkbox" id="hipertension" name="enfermedades[]" value="hipertension">
                    <label for="hipertension">Hipertensión</label>
                    
                    <input type="checkbox" id="cardiopatias" name="enfermedades[]" value="cardiopatias">
                    <label for="cardiopatias">Cardiopatías</label>
                </div>
            </div>
            
            <!-- Más secciones según norma -->
        </fieldset>
        
        <button type="submit" class="btn-primary">Guardar Historial</button>
    </form>
    <h2 class="subtitulos">¿Conoces la norma de expedientes clínicos? <a href="https://dar.care/assets/normas/nom-004.pdf">Saber más.....</a></h2>
</div>

</body>
</html>