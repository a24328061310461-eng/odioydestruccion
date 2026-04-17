<?php
require_once 'conexion.php';
if(isset($POST['submit'])){
    $nombre_personaje = $_POST['nombre'] ?? '';
    $actriz = $_POST['nombrereal'] ?? '';
    $habilidad_destacada = $_POST['poderes'] ?? '';
    $ocupacion = $_POST['altura'] ?? ''; // Usamos el campo altura para ocupación según tu tabla
    $bio = $_POST['bio'] ?? '';
    
}
//procesar la imagen
if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0){
    $img_tmp_name = $_FILES['imagen']['tmp_name'];
    $img_name = $_FILES['imagen']['name'];

        $img_content = file_get_contens ($img_tmp_name); //este es el contenido binario de la imagen

        //con esto que sigue es para guardar las imagenes en una carpeta que se creara.
        $upload_dir = 'uploads/'
        if(!is_dir($upload_dir)){
            mkdir($upload_dir, 0777, true);
        }
        move_uploaded_file($img_tmp_name, $upload_dir . $img_name);
} else{
    die("Error al subir imagen.");
} try {
    $sql = "INSERT INTO mutantes (nombre_clave, nombre_real, poderes, altura, bio, imagen)
    VALUES (:nombre, :nombrereal, :poderes, :altura, :bio :imagen)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nombre_clave', $nombre);
    $stmt->bindParam(':nombre_real', $nombre_real);
    $stmt->bindParam(':poderes', $poderes);
    $stmt->bindParam(':altura', $altura);
    $stmt->bindParam(':bio', $bio);
    $stmt->bindParam(':imagen', $img_comtent, PDO:PARAM_LOB); //el PAARAM_LOB es para uso de datos binarios "grandes"
    
    stmt->execute();
        // REDIRETIÓN: Despues de guardar, mandamos al usuario a la página de tarjetas
        header("Location: cards.php?success=1")
        exit();
    } catch {  (PDOException $e) {
        //Si la tabla no existe o falta la colmna, mostraremos el error de forma clara
        die("Error en la Base de Datos: " . $e->getMessage() .
            "<br><br> Asegúrate de que tu tabla 'equipoazul' tenga la columna 'altura',
            Puedes agregarla con. ALTER TABLA equipoazul ADD COLUMN altura VARCHAR(50);");
} }
else {
    //Si alguien intenta entrar a process.php sin enviar el formulario, lo mandamos de vuelta
    header("Location: form.php");
    exit();
}
?>