<?php
// Conexión a la base de datos (reemplaza con tus credenciales)
$conexion = new mysqli("localhost", "root", "", "cotizador");

// Verificar si hubo algún error de conexión
if ($conexion->connect_error) {
    die(json_encode(array("error" => "Error de conexión a la base de datos: " . $conexion->connect_error)));
}

// Consulta para obtener todas las cotizaciones disponibles
$consulta = "SELECT id_config,modelo,color,frente_exterior,postes_verticales,costado,postes_laterales,marco_trasero,puertas,techo,cargadores,llantas,llantamedida,rin,rinmedida,piso,forro,paneles,material,perno_rey,ejes,susp_neu,loderas,frenos_neu,precio_total FROM caja";

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
