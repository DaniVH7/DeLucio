<?php
// Conexión a la base de datos (reemplaza con tus credenciales)
$conexion = new mysqli("localhost", "root", "", "cotizador");

// Verificar si hubo algún error de conexión
if ($conexion->connect_error) {
    die(json_encode(array("error" => "Error de conexión a la base de datos: " . $conexion->connect_error)));
}

// Consulta para obtener todas las cotizaciones disponibles
$consulta = "SELECT id_config,modelo,color,capacidad,alto,ancho,largo,patines,manivelas,llantas,medida,rin,rin_medida,material,birlo,caja_herramientas,letrero,perno_rey,porta_llantas,gancho_arrastre,no_ejes,ejes,placa_perso,susp_neu,eje_retractil,tipo,frenos_neu,guarda,autoinflado,precio_total FROM gondola";

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
