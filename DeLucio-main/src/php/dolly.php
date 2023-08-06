<?php
// procesar_formulario.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $modelo = $_POST["modelo"];
    $color = $_POST["color"];
    $alto = $_POST["alto"];
    $ancho = $_POST["ancho"];
    $largo = $_POST["largo"];
    $ojillo_tiron = $_POST["ojillo_tiron"];
    $largo_lanza = $_POST["largo_lanza"];
    $quinta_rueda = $_POST["quinta_rueda"];
    $altura_quinta = $_POST["altura_quinta"];
    $soporte_quinta = $_POST["soporte_quinta"];
    $llantas = $_POST["llantas"];
    $llanta_medida = $_POST["llanta_medida"];
    $rin = $_POST["rin"];
    $rin_medida = $_POST["rin_medida"];
    $material_rin = $_POST["material_rin"];
    $ejes = $_POST["ejes"];
    $birlo = $_POST["birlo"];    
    $lubricacion = $_POST["lubricacion"];
    $susp_neumatica = $_POST["susp_neumatica"];
    $porta_placas = $_POST["porta_placas"];    
    $auto_inflado = $_POST["auto_inflado"];
    $porta_loderas = $_POST["porta_loderas"];
    $eje_retractil = $_POST["eje_retractil"];
        
    // Acceder al array de precios y obtener los precios seleccionados
    $precios = array(
        "modelo" => array(
            "2019" => 500,
            "2020" => 550,
            "2021" => 600,
            "2022" => 650,
            "2023" => 700,
            "2024" => 750
        ),
        "color" => 100,
        "alto" => array(
            "Fijo" => 500
        ),
        "ancho" => array(
            "2.60 m" => 200,
        ),
        "largo" => array(
            "2.47 m" => 100,
        ),
        "ojillo_tiron" => array(
            "Premier 245 DB (2 3/8 pulgadas para gancho Premier 2400)" => 200,
            "Premier 245 DB-3 (3 pulgadas para gancho Premier 880/2880)" => 250,
            "Premier 207 (giratorio de 2 3/8 pulgadas para gancho premier 2400)" => 300,
            "Premier 307(giratorio de 3 pulgadas para gancho Premier 880/2880)" => 350,
            "Wallace Forge 0-42-D (2 3/8 pulgadas para gancho WF R50)" => 400,
            "Wallace Forge 0-53-D (3 pulgadas para gancho WFR75)" => 450
        ),
        "largo_lanza" => array(
            ".60 m" => 100,
            ".70 m" => 120,
            ".80 m" => 140,
            ".90 m" => 160,
            "1.00 m" => 180,
            "1.10 m" => 200
        ),
        "quinta_rueda" => array(
            "Holland FW35" => 300 
        ),
        "altura_quinta" => array(
            "6 pulgadas" => 50,
            "8 pulgadas" => 70
        ),"soporte_quinta" => array(
            "Fijo" =>20
        ),
        "llantas" => array(
            "8" =>100
        ),
        "llanta_medida" => array(
            "11R22.5" =>100,
            "11R24.5" =>120
        ),
        "rin" => array(
            "8" =>100,
        ),
        "rin_medida" => array(
            "11R22.5" =>100,
            "11R24.5" =>120
        ),
        "material_rin" => array(
            "Acero" => 1000,
            "Aluminio" => 1500
        ),
        "ejes" => array(
            "De 30,000 lbs, 77.5 pulgadas de Track" =>300,
        ),
        "birlo" => array (
            "Corto (AC)" => 100,
            "Largo (AL)" => 150
        ),
        
        "lubricacion" => array(
            "Grasa" =>100,
            "Aceite" =>120
        ),
        "susp_neumatica" => array(
            "Azteca King Ak-300 de 30,000 lbs de capacidad" => 200,
        ),
        "porta_placas" => array(
            "Si" =>100
        ),
        "auto_inflado" => array(
            "Si" => 100,
            "No" => 0
        ),
        "porta_loderas" => array(
            "Si" => 100,
            "No" => 0
        ),
        "eje_retractil" => array(
            "Si" => 100,
            "No" => 0
        ),
        
    );
    

    $modeloPrecio = $precios["modelo"][$modelo];
    $colorPrecio = $precios["color"][$color];
    $materialRinPrecio = $precios["material_rin"][$material_rin];
    $altoPrecio = $precios["alto"][$alto];
    $birloPrecio = $precios["birlo"][$birlo];
    $anchoPrecio = $precios["ancho"][$ancho];
    $ejesPrecio = $precios["ejes"][$ejes];
    $largoPrecio = $precios["largo"][$largo];
    $lubricacionPrecio = $precios["lubricacion"][$lubricacion];
    $ojillo_tironPrecio = $precios["ojillo_tiron"][$ojillo_tiron];
    $susp_neumaticaPrecio = $precios["susp_neumatica"][$susp_neumatica];
    $largo_lanzaPrecio = $precios["largo_lanza"][$largo_lanza];
    $porta_placasPrecio = $precios["porta_placas"][$porta_placas];
    $quinta_ruedaPrecio = $precios["quinta_rueda"][$quinta_rueda];
    $altura_quintaPrecio = $precios["altura_quinta"][$altura_quinta];
    $porta_loderasPrecio = $precios["porta_loderas"][$porta_loderas];
    $auto_infladoPrecio = $precios["auto_inflado"][$auto_inflado];    
    $soporte_quintaPrecio = $precios["soporte_quinta"][$soporte_quinta];
    $eje_retractilPrecio = $precios["eje_retractil"][$eje_retractil];
    $llantasPrecio = $precios["llantas"][$llantas];
    $llanta_medidaPrecio = $precios["llanta_medida"][$llanta_medida];
    $rinPrecio = $precios["rin"][$rin];
    $rin_medidaPrecio = $precios["rin_medida"][$rin_medida];

    // Calcular el precio total
    $precioTotal = $modeloPrecio+ $colorPrecio+$materialRinPrecio + $altoPrecio + $birloPrecio +$anchoPrecio+$ejesPrecio+$largoPrecio+$lubricacionPrecio+$ojillo_tironPrecio+$susp_neumaticaPrecio+$largo_lanzaPrecio+$porta_placasPrecio+$quinta_ruedaPrecio+$altura_quintaPrecio+$porta_loderasPrecio+$soporte_quintaPrecio+$eje_retractilPrecio+$llantasPrecio+$llanta_medidaPrecio+$rinPrecio+$rin_medidaPrecio +$auto_infladoPrecio;

    // Aquí debes realizar la conexión a tu base de datos y guardar los datos
    // Asegúrate de filtrar y escapar los datos antes de guardarlos en la base de datos

    // Ejemplo de conexión y consulta con MySQLi
    $conexion = new mysqli("127.0.0.1", "root", "", "cotizador");
    if ($conexion->connect_error) {
        die("Error al conectar a la base de datos: " . $conexion->connect_error);
    }
    
    // Ejemplo de inserción de datos en una tabla "cotizaciones"
    $sql = "INSERT INTO dolly (modelo,color,alto,ancho,largo,ojillo,largodelanza,quinta,alturaquinta,soportequinta,llantas,llantamedida,rin,rinmedida,material_rin,ejes,birlos,lubricacion,suspension,portaplacas,autoinflado,portaloderas,retractil,precio_total) VALUES ('$modelo','$color','$alto', '$ancho', '$largo', '$ojillo_tiron', '$largo_lanza', '$quinta_rueda', '$altura_quinta', '$soporte_quinta', '$llantas', '$llanta_medida', '$rin', '$rin_medida', '$material_rin', '$ejes', '$birlo', '$lubricacion', '$susp_neumatica','$porta_placas','$auto_inflado', '$porta_loderas', '$eje_retractil', '$precioTotal')";
    
    if ($conexion->query($sql) === TRUE) {
        header("Location:../html/enviado.html");
    } else {
        echo "Error al guardar la cotización: " . $conexion->error;
    }
    
    $conexion->close();
}
?>
