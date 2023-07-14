<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agrega mi hoja de estilos personalizada -->
    <link rel="stylesheet" href="estilo.css">
    <!-- Título de la página -->
    <title>Viajes y Parques</title>
    <!-- Agrega los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
</head>

<body>

    <!-- Barra con logo -->
    <nav class="navbar navbar-light navbar-custom">
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="300" height="150" class="d-inline-block align-top" alt="Logo">
        </a>
    </nav>

    <!-- Formulario -->
    <div class="container custom-container">
        <form action="Pagina.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="edad">¿Es mayor de 18 años?</label>
                <select id="edad" name="edad" class="form-control">
                    <option value="no">No</option>
                    <option value="si">Si</option>
                </select>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="interesado" name="interesado" value="si">
                    <label class="form-check-label" for="interesado">Interesado en mayor información</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <img class="imagen" src="IA.png" alt="Paisajes creados con inteligencia artificial">

    <!-- Nombre del creador y nombre de la empresa de fantasía -->
    <footer class="footer">
        <p>Empresa: Viajes y Parques</p>
        <p>Ariela Ulloa Herrera</p>
        <p>© 2023. Todos los derechos reservados.</p>
    </footer>

</body>

</html>

