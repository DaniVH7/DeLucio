<?php
// Conexión a la base de datos (reemplaza con tus credenciales)
$conexion = new mysqli("localhost", "root", "", "cotizador");

// Verificar si hubo algún error de conexión
if ($conexion->connect_error) {
    die(json_encode(array("error" => "Error de conexión a la base de datos: " . $conexion->connect_error)));
}

// Consulta para obtener todas las cotizaciones disponibles
$consulta = "SELECT id_config,nombre,correo,telefono,modelo,color,cabezal_frontal,cabezal_trasero,mensulas,patines,manivelas,llantas,llantamedida,rin,rinmedida,material,birlo,perno_rey,ejes,no_ejes,frenos_neu,susp_neu,eje_retractil,tipo,gancho_arrastre,porta_llantas,precio_total FROM porta24";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

// Verificar si la consulta tuvo éxito
if (!$resultado) {
    die(json_encode(array("error" => "Error en la consulta: " . $conexion->error)));
}

// Crear un arreglo para almacenar las cotizaciones
$cotizaciones = array();
while ($fila = $resultado->fetch_assoc()) {
    $cotizaciones[] = $fila;
}

// Cerrar la conexión a la base de datos
$conexion->close();

// Devolver las cotizaciones en formato JSON
header("Content-Type: application/json");
echo json_encode($cotizaciones);
?>
