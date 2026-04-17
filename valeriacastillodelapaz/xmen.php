<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.cdnfonts.com/css/austin-3" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="stylexmen.css">

    <title>Alisson Santiago Cruz</title>

</head>

<body>

<div>
    <nav class="navbar navbar-light" style="background-color:var(--color-barra);">
        <div class="container">
            <a class="navbar-brand" href="index1.html" style="color:var(--color-de-lertras); font-family: 'Times New Roman', Times, serif">Home</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 1
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href="mostrar.php">Mostrar Datos</a><br>
                            <a class="dropdown-item" href="meterdatos.php">Meter Datos</a><br>
                            <a class="dropdown-item" href="tablafinal.php">Tabla Final</a>
                                <a class="dropdown-item" href="xmen.php">Series</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 2
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <a class="dropdown-item" href="relaciones01.php">Relación 1</a><br>
                            <a class="dropdown-item" href="relaciones02.php">Relación 2</a><br>
                            <a class="dropdown-item" href="relaciones_disney.php">Relaciones Disney</a><br>
                            <a class="dropdown-item" href="capturadatosrelaconados.php">Relaciones de datos</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 3
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                            <a class="dropdown-item" href="ali7.html">OLA</a><br>
                            <a class="dropdown-item" href="ali8.html">OLA</a><br>
                            <a class="dropdown-item" href="ali9.html">OLA</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container">
    <form action="proceso.php" method="POST" enctype="multipart/form-data">
 <div class="form-group">
        <label for="nombre">Personaje de Serie:</label>
       <input type="text" name="nombre" id="nombre" placeholder="Ej. Daenerys Targaryen" required>
       </div> <!-- el metodo post para enviar  datos de forma segura, especialmente archivos, que seran las fotos lo de enctype
   es obligatorio cuando el formulario incluye estos archivos de imagen u otro tipo de archivo y el de "proceso.html"
   es el que va a procesar los datos -->
       <div class="form-group">
        <label for="nombrereal">Nombre de la Actriz:</label>
        <input type="text" name="nombrereal" id="nombrereal" placeholder="Ej. Emilia Clarke" required>
        </div>
        <div class="form-group">
                <label for="poderes">Habilidad Destacada: </label>
                <input type="text" name="poderes" id="poderes" placeholder="Ej. Estrategia, Liderazgo" required>
        </div>
        <div class="form-group">
            <label for="altura"> Altura:</label>
            <input type="text" name="altura" id="altura" placeholder="Ej. 1.75 m" required>
            </div>
             <div class="form-group">
            <label for="ocupacion"> Ocupación:</label>
            <input type="text" name="ocupacion" id="ocupacion" placeholder="Ej. Reina / Espía" required>
            </div>
            <div class="form-group">
                <label for="bio">Biografía: </label>
                <textarea name="bio" id="bio" placeholder="Escribe la historia del personaje..."></textarea>
       </div>
         <div class="form-group">
                <label for="bio">Biografía: </label>
                <textarea name="bio" id="bio" placeholder="Escribe la historia del personaje..."></textarea>
       </div>
        <div class="form-group">
            <label for="imagen">Foto del Personaje:</label>
            <input type="file" name="imagen" id="imagen" accept="image/*" required>
            <!--con "imagen/* " solo acepatara imagenes, nada mas-->
        </div>
       <div style="text-align: center;">
            <button type="submit" class="btn">Guardar Personaje</button>
        </div>
    </form>
</div>
</body>
</html>