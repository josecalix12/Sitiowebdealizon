 <?php
// Incluimos el archivo de conexión
include_once 'conexion.php';

// Definimos una variable para almacenar mensajes de error
$error_message = "";

// Verificamos si se han enviado los datos del formulario
if(isset($_POST['correo']) && isset($_POST['contrasena'])) {
    // Recibimos los datos del formulario
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Consulta SQL para verificar si el correo existe en la base de datos
    $sql = "SELECT * FROM usuarios WHERE email = '$correo'";
    $resultado = mysqli_query($conexion, $sql);

    // Verificamos si se encontró algún registro
    if(mysqli_num_rows($resultado) > 0) {
        // Usuario encontrado, verificamos la contraseña
        $usuario = mysqli_fetch_assoc($resultado);
        if($usuario['contrasena'] == $contrasena) {
            // Contraseña correcta, redireccionamos al usuario a Inicio.php
            header("Location: Inicio.php");
            exit; // Detenemos la ejecución del script después de la redirección
        } else {
            // Contraseña incorrecta, establecemos el mensaje de error
            $error_message = "Contraseña incorrecta";
        }
    } else {
        // Usuario no encontrado, establecemos el mensaje de error
        $error_message = "El correo electrónico no existe";
    }
} else {
    // No se han enviado los datos del formulario
    $error_message = "No se han enviado los datos del formulario";
}

// Incluimos el archivo HTML y CSS de la página de inicio de sesión
include 'login.php';
?>
