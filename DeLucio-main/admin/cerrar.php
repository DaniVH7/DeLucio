<?php
// Iniciar la sesión
session_start();

// Verificar si se desea cerrar la sesión
if (isset($_POST['cerrar_sesion'])) {
    // Destruir la sesión
    session_destroy();

    // Eliminar la cookie de sesión
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    // Redirigir al usuario a la página de inicio de sesión
    header("Location: inciarSesion.html");
    exit();
}
?>