<?php
// Conexión a la base de datos (reemplaza con tus credenciales)
$conexion = new mysqli("localhost", "root", "", "cotizador");

// Verificar si hubo algún error de conexión
if ($conexion->connect_error) {
    die(json_encode(array("error" => "Error de conexión a la base de datos: " . $conexion->connect_error)));
}

// Consulta para obtener todas las cotizaciones disponibles
$consulta = "SELECT id_config,modelo,color,largo,piso,patines,llantas,medida,rin,rin_medida,material,frenos_neu,frente_lam,loderas,guarda,ejes,perno_rey,manivelas,gancho_arrastre,susp_neu,matracas,caja_herramientas,letrero,placa_perso,precio_total FROM plana";

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
