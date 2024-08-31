 <?php
// Incluimos el archivo de conexión
include_once 'conexion.php';

// Verificamos si se han enviado los datos del formulario
if(isset($_POST['nombre'], $_POST['contrasena'], $_POST['email'])) {
    // Recibimos los datos del formulario
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $email = $_POST['email'];

    // Escapamos los datos para evitar inyección de SQL
    $nombre = mysqli_real_escape_string($conexion, $nombre);
    $contrasena = mysqli_real_escape_string($conexion, $contrasena);
    $email = mysqli_real_escape_string($conexion, $email);

    // Consulta SQL para verificar si el correo electrónico ya existe
    $sql_verificar = "SELECT * FROM usuarios WHERE email='$email'";
    $resultado_verificar = mysqli_query($conexion, $sql_verificar);

    // Verificamos si se encontró algún registro con el mismo correo electrónico
    if(mysqli_num_rows($resultado_verificar) > 0) {
        echo "Error: El correo electrónico ya ha sido registrado";
    } else {
        // Consulta SQL para insertar un nuevo usuario en la base de datos
        $sql_insertar = "INSERT INTO usuarios (nombre, contrasena, email) VALUES ('$nombre', '$contrasena', '$email')";

        // Ejecutamos la consulta
        if(mysqli_query($conexion, $sql_insertar)) {
            echo "El registro se guardó correctamente";
        } else {
            echo "Error: Algo salió mal al insertar en la base de datos: " . mysqli_error($conexion);
        }
    }

    // Redirigir al usuario a login.php después de cerrar la conexión
    header("Location: login.php");
    exit; // Importante: asegúrate de salir del script después de la redirección
} else {
    echo "Error: No se han recibido los datos del formulario";
}

// Cerramos la conexión
mysqli_close($conexion);
?>
