<?php
$nombre = $_POST["nombre"];
$email = $_POST["correo"];
$telefono = $_POST["telefono"];
    $modelo = (int)$_POST["modelo"];
    $color = htmlspecialchars($_POST["color"]);
    $capacidad = htmlspecialchars($_POST["capacidad"]);
    $alto = htmlspecialchars($_POST["alto"]);
    $ancho = htmlspecialchars($_POST["ancho"]);
    $largo = htmlspecialchars($_POST["largo"]);
    $patines = htmlspecialchars($_POST["patines"]); 
    $manivelas = htmlspecialchars($_POST["manivelas"]); 
    $llantas = htmlspecialchars($_POST["llantas"]);
    $medida = htmlspecialchars($_POST["llanta_medida"]);
    $rin = htmlspecialchars($_POST["rin"]);
    $rin_medida = htmlspecialchars($_POST["rin_medida"]);
    $material = htmlspecialchars($_POST["material_rin"]);
    $birlo = htmlspecialchars($_POST["birlo"]);
    $caja_herramientas = htmlspecialchars($_POST["caja_herramientas"]); 
    $letrero = htmlspecialchars($_POST["letrero"]); 
    $perno_rey = htmlspecialchars($_POST["perno_rey"]);
    $porta_llantas = htmlspecialchars($_POST["porta_llantas"]);
    $gancho_arrastre = htmlspecialchars($_POST["gancho_arrastre"]);
    $ejes = htmlspecialchars($_POST["ejes"]);
    $no_ejes = htmlspecialchars($_POST["num_ejes"]);
    $placa_person = htmlspecialchars($_POST["placa_perso"]);
    $susp_neu = htmlspecialchars($_POST["susp_neu"]);
    $eje_retractil = htmlspecialchars($_POST["eje_retractil"]);
    $tipo = htmlspecialchars($_POST["tipo"]);
    $frenos_neu = htmlspecialchars($_POST["frenos_neu"]);
    $guarda = htmlspecialchars($_POST["guarda"]);
    $auto_inflado = htmlspecialchars($_POST["auto_inflado"]); 
               
$precios = array(
    "modelo" => array(
        "2019" => 500,
        "2020" => 550,
        "2021" => 600,
        "2022" => 650,
        "2023" => 700,
        "2024" => 750
    ),
    "color" =>500,
    "capacidad" => array(
        "24 m3" => 1000,
        "30 m3" => 2000,
        "40 m3" => 3000,
        "50 m3" => 4000,
    ),
    "alto" => array(
        "2.91 m" => 1000,
        "3.12 m" => 2000,
        "3.75 m" => 3000,
        "4.13 m" => 4000,
    ),
    "ancho" => array(
        "2.60 m" => 1000,
    ),
    "largo" => array(
        "9.89 m" => 1000,
        "9.93 m" => 2000,
        "10.00 m" => 3000,
        "10.33 m" => 4000,
    ),
    "patines" => array(
        "1 juego de patines" => 1000,
        "2 juegos de patines" => 2000
    ),
    "manivelas" => array(
        "Lado piloto" => 1000,
        "Lado copiloto" => 2000,
    ),
    "llantas" => array(
        "8" => 200,
        "12" => 400,
    ),
    "llanta_medida" => array(
        "11R22.5" => 100,
        "11R24.5" => 200,
    ),
    "rin" => array(
        "8" => 200,
        "12" => 400,
    ),
    "rin_medida" => array(
        "11R22.5" => 100,
        "11R24.5" => 200,
    ),
    "material_rin" => array(
        "Acero" => 100,
        "Aluminio" => 200,
    ),
    "birlo" => array(
        "Corto (AC)" => 100,
        "Largo (AL)" => 100,
    ),
    "caja_herramientas" => array(
        "Lateral" => 1000,
        "Interior" => 1200,
        "Entre vigas" => 1300
    ),    
    "letrero" => array(
        "Si" => 100,
    ),
    "perno_rey" => array(
        "Wallace Forge de 3/8" => 100,
    ),
    "portallantas" => array(
        "1" => 100,
    ),
    "gancho_arrastre" => array(
        "Colocar placa sin gancho de arrastre" => 50,
        "Colocar placa con gancho de arrastre Premier 2400 (2 pulgadas 10 barrenos)"=> 250,
        "Colocar placa con gancho de arrastre Wallace Forge R50-10 (2 pulgadas 10 barrenos)"=> 200,
        "Colocar placa con gancho de arrastre Holland"=> 300,
    ),
    "ejes" => array(
        "De 30,000 lbs con 77.5 pulgadas de track" => 1000,
    ),
    "no_ejes" => array(
        "2" => 1000,
        3 => 2000,
    ),
    
    "placa_person" => array(
        "Si" => 1300,
    ), 
    "susp_neu" => array(
        "Azteca King AK-300 de 30,000 lbs de capacidad" => 1000,
    ),
    "eje_retractil" => array(
        "1er eje" => 700,
        "2do eje" => 900,
    ),
    "tipo" => array(
        "Brazo central con camara de aire" => 1000,
        "UBL" => 3000,
    ),
    "frenos_neu" => array(
        "Sistema ABS - 2S1M de acuerdo a SCT" => 2000
    ),
    "guarda" => array(
        "Si" => 800,
    ),
    "auto_inflado" => array(
        "Si" => 1000,
        "No" => 0
    ),
);

$modeloPrecio = $precios["modelo"][$modelo];
$colorPrecio = $precios["color"][$color];
$capacidadPrecio = $precios["capacidad"][$capacidad];
$altoPrecio = $precios["alto"][$alto];
$anchoPrecio = $precios["ancho"][$ancho];
$largoPrecio = $precios["largo"][$largo];
$patinesPrecio = $precios["patines"][$patines];
$manivelasPrecio = $precios["manivelas"][$manivelas];
$llantasPrecio = $precios["llantas"][$llantas];
$medidaPrecio = $precios["llanta_medida"][$medida];
$rinPrecio = $precios["rin"][$rin];
$rin_medidaPrecio = $precios["rin_medida"][$rin_medida];
$materialPrecio = $precios["material_rin"][$material];
$birloPrecio = $precios["birlo"][$birlo];
$caja_herramientasPrecio = $precios["caja_herramientas"][$caja_herramientas];
$letreroPrecio = $precios["letrero"][$letrero];
$perno_reyPrecio = $precios["perno_rey"][$perno_rey];
$porta_llantasPrecio = $precios["portallantas"][$porta_llantas];
$gancho_arrastrePrecio = $precios["gancho_arrastre"][$gancho_arrastre];
$no_ejesPrecio = $precios["no_ejes"][$no_ejes];
$ejesPrecio = $precios["ejes"][$ejes];
$placa_personPrecio = $precios["placa_person"][$placa_person];
$susp_neuPrecio = $precios["susp_neu"][$susp_neu];
$eje_retractilPrecio = $precios["eje_retractil"][$eje_retractil];
$tipoPrecio = $precios["tipo"][$tipo];
$frenos_neuPrecio = $precios["frenos_neu"][$frenos_neu];
$guardaPrecio = $precios["guarda"][$guarda];
$auto_infladoPrecio = $precios["auto_inflado"][$auto_inflado];


$precioTotal= $modeloPrecio+$colorPrecio+$capacidadPrecio+$altoPrecio+$anchoPrecio+$largoPrecio+$patinesPrecio+$manivelasPrecio+$llantasPrecio+$medidaPrecio+$rinPrecio+$rin_medidaPrecio+$materialPrecio+$birloPrecio+$caja_herramientasPrecio+$letreroPrecio+$perno_reyPrecio+$porta_llantasPrecio+$gancho_arrastrePrecio+$no_ejesPrecio+$ejesPrecio+$placa_personPrecio+$susp_neuPrecio+$eje_retractilPrecio+$tipoPrecio+$frenos_neuPrecio+$guardaPrecio+$auto_infladoPrecio;
$conexion = new mysqli("127.0.0.1", "root", "", "cotizador");
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

// Ejemplo de inserción de datos en una tabla "cotizaciones"
$sql = "INSERT INTO gondola (nombre,correo,telefono,modelo,color,capacidad,alto,ancho,largo,patines,manivelas,llantas,medida,rin,rin_medida,material,birlo,caja_herramientas,letrero,perno_rey,porta_llantas,gancho_arrastre,ejes,no_ejes,placa_perso,susp_neu,eje_retractil,tipo,frenos_neu,guarda,autoinflado,precio_total) 
VALUES ('$nombre','$email','$telefono','$modelo','$color','$capacidad','$alto','$ancho','$largo','$patines','$manivelas','$llantas','$medida','$rin','$rin_medida','$material','$birlo','$caja_herramientas','$letrero','$perno_rey','$porta_llantas','$gancho_arrastre','$ejes','$no_ejes','$placa_person','$susp_neu','$eje_retractil','$tipo','$frenos_neu','$guarda','$auto_inflado','$precioTotal')";

if ($conexion->query($sql) === TRUE) {
    header("Location:../html/enviado.html");
} else {
    echo "Error al guardar la cotización: " . $conexion->error;
}

$conexion->close();

?>
