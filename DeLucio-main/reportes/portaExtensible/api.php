<?php
// Función para obtener los datos de la cotización desde la base de datos
function obtener_datos_desde_mysql($cotizacionId) {
    $host = "localhost";
    $usuario = "root";
    $contrasena = "";
    $basededatos = "cotizador";

    // Establecer conexión a la base de datos
    $conexion = new mysqli($host, $usuario, $contrasena, $basededatos);

    // Comprobar si hubo algún error de conexión
    if ($conexion->connect_error) {
        die("Error de conexión a la base de da  tos: " . $conexion->connect_error);
    }

    $consulta = "SELECT id_config,nombre,correo,telefono,modelo,color,cabezal_frontal,cabezal_trasero,llantas,llantamedida,rin,rinmedida,material,birlo,lubricacion,ejes,portaloderas,perno_rey,patines,manivelas,gancho_arrastre,frenos_neu,susp_neu,eje_retractil,tipo,porta_llantas,susp_neu,precio_total FROM portaextensible WHERE id_config = $cotizacionId";
    $resultado = $conexion->query($consulta);

    // Verificar si la consulta tuvo éxito
    if (!$resultado) {
        die("Error en la consulta: " . $conexion->error);
    }

    // Crear un arreglo con los datos de la cotización
    $datos = array();
    while ($fila = $resultado->fetch_assoc()) {
        $datos[] = $fila;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();

    return $datos;
}

// Obtener el ID de la cotización desde el parámetro de la URL
if (isset($_GET['id_config'])) {
    $cotizacionId = $_GET['id_config'];
    $datos = obtener_datos_desde_mysql($cotizacionId);
    echo json_encode($datos);
} else {
    echo json_encode(["error" => "Falta el parámetro id_config"]);
}