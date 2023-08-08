<?php
$nombre = $_POST["nombre"];
$email = $_POST["correo"];
$telefono = $_POST["telefono"];
    $modelo = (int)$_POST["modelo"];
    $color = htmlspecialchars($_POST["color"]);
    $configuracion = htmlspecialchars($_POST["config"]);
    $cabezal_frontal = htmlspecialchars($_POST["cabezal_frontal"]);
    $cabezal_trasero = htmlspecialchars($_POST["cabezal_trasero"]);
    $mensulas = htmlspecialchars($_POST["mensulas"]);
    $llantas = htmlspecialchars($_POST["llantas"]);
    $medida = htmlspecialchars($_POST["llanta_medida"]);
    $rin = htmlspecialchars($_POST["rin"]);
    $rin_medida = htmlspecialchars($_POST["rin_medida"]);
    $material = htmlspecialchars($_POST["material_rin"]);
    $birlo = htmlspecialchars($_POST["birlo"]); 
    $lubricacion = htmlspecialchars($_POST["lubricacion"]); 
    $patines = htmlspecialchars($_POST["patines"]); 
    $gancho_arrastre = htmlspecialchars($_POST["gancho_arrastre"]);
    $ejes = htmlspecialchars($_POST["ejes"]);
    $porta_llantas = htmlspecialchars($_POST["portallantas"]);
    $perno_rey = htmlspecialchars($_POST["perno_rey"]);
    $susp_neu = htmlspecialchars($_POST["susp_neu"]);
    $frenos_neu = htmlspecialchars($_POST["frenos_neu"]);
    $eje_retractil = htmlspecialchars($_POST["eje_retractil"]);
    $tipo = htmlspecialchars($_POST["tipo"]);
    $guarda = htmlspecialchars($_POST["guarda"]);
               
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
    "config" => 50,
    "cabezal_frontal" => array(
        "Con 1 par de seguros tipo pin-lock de 1 pulgada de diámetro" => 100,
        "Con 2 pared de seguros tipo pin-lock de 1 pulgada de diametro" =>200
    ),
    "cabezal_trasero" => array(
        "Con 1 par de candados fijos tipo twist lock" => 100,
    ),
    "mensulas" => array(
        "N/A" => 0,
        "1 par de mensulas centrales fijas, con un twist lock cada una" => 100,
        "1 par de mensulas centrales fijas y 1 par de mensulas centrales fijas con un twist lock retractil cada una" => 200,
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
    "lubricacion" => array(
        "Grasa" => 100,
        "Aceite" => 110,
    ),
    "patines" => array(
        "1 juego de patines" => 100,
    ),
    "gancho_arrastre" => array(
        "Colocar placa sin gancho de arrastre" => 50,
        "Colocar placa con gancho de arrastre Premier 2400 (2 pulgadas 10 barrenos)"=> 250,
        "Colocar placa con gancho de arrastre Wallace Forge R50-10 (2 pulgadas 10 barrenos)"=> 200,
        "Colocar placa con gancho de arrastre Holland"=> 300,
    ),
    "ejes" => array(
        "De 30,000 lbs con 77.5 pulgadas de track" => 100,
    ),
    "portallantas" => array(
        "1" => 100,
    ),
    "perno_rey" => array(
        "Wallace Forge de 3/8" => 100,
    ),    
    "susp_neu" => array(
        "Azteca King AK-300 de 30,000 lbs de capacidad" => 100,
    ),
    "frenos_neu" => array(
        "Sistema ABS – 2S1M de acuerdo a SCT" => 200
    ),
    "eje_retractil" => array(
        "1er eje" => 100,
        "2do eje" => 200,
    ),
    "tipo" => array(
        "Brazo central" => 100,
        "UBL" => 300,
    ),
    "guarda" => array(
        "Si" => 100,
    ),
);

$modeloPrecio = $precios["modelo"][$modelo];
$colorPrecio = $precios["color"][$color];
$cabezal_frontalPrecio = $precios["cabezal_frontal"][$cabezal_frontal];
$cabezal_traseroPrecio = $precios["cabezal_trasero"][$cabezal_trasero];
$mensulasPrecio = $precios["mensulas"][$mensulas];
$llantasPrecio = $precios["llantas"][$llantas];
$medidaPrecio = $precios["llanta_medida"][$medida];
$rinPrecio = $precios["rin"][$rin];
$rin_medidaPrecio = $precios["rin_medida"][$rin_medida];
$materialPrecio = $precios["material_rin"][$material];
$birloPrecio = $precios["birlo"][$birlo];
$lubricacionPrecio = $precios["lubricacion"][$lubricacion];
$patinesPrecio = $precios["patines"][$patines];
$gancho_arrastrePrecio = $precios["gancho_arrastre"][$gancho_arrastre];
$ejesPrecio = $precios["ejes"][$ejes];
$porta_llantasPrecio = $precios["portallantas"][$porta_llantas];
$perno_reyPrecio = $precios["perno_rey"][$perno_rey];
$susp_neuPrecio = $precios["susp_neu"][$susp_neu];
$frenos_neuPrecio = $precios["frenos_neu"][$frenos_neu];
$eje_retractilPrecio = $precios["eje_retractil"][$eje_retractil];
$tipoPrecio = $precios["tipo"][$tipo];
$guardaPrecio = $precios["guarda"][$guarda];

$precioTotal = $modeloPrecio+$colorPrecio+$cabezal_frontalPrecio+$cabezal_traseroPrecio+$mensulasPrecio+$llantasPrecio+$medidaPrecio+$rinPrecio+$rin_medidaPrecio+$materialPrecio+$birloPrecio+$lubricacionPrecio+$patinesPrecio+$gancho_arrastrePrecio+$ejesPrecio+$porta_llantasPrecio+$perno_reyPrecio+$susp_neuPrecio+$frenos_neuPrecio+$eje_retractilPrecio+$tipoPrecio+$guardaPrecio;

$conexion = new mysqli("127.0.0.1", "root", "", "cotizador");
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

// Ejemplo de inserción de datos en una tabla "cotizaciones"
$sql = "INSERT INTO portaestandar (nombre,correo,telefono,modelo,configuracion,color,cabezal_frontal,cabezal_trasero,mensulas,llantas,llantamedida,rin,rinmedida,material,birlo,lubricacion,patines,gancho_arrastre,ejes,porta_llantas,perno_rey,susp_neu,frenos_neu,eje_retractil,tipo,guarda,precio_total) 
VALUES ('$nombre','$email','$telefono','$modelo','$configuracion', '$color','$cabezal_frontal','$cabezal_trasero','$mensulas','$llantas','$medida','$rin','$rin_medida','$material','$birlo','$lubricacion','$patines','$gancho_arrastre','$ejes','$porta_llantas','$perno_rey','$susp_neu','$frenos_neu','$eje_retractil','$tipo','$guarda','$precioTotal')";

if ($conexion->query($sql) === TRUE) {
    header("Location:../html/enviado.html");
}
    else {
    echo "Error al guardar la cotización: " . $conexion->error;
}

$conexion->close();

?>
