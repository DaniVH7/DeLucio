<?php
$nombre = $_POST["nombre"];
$email = $_POST["correo"];
$telefono = $_POST["telefono"];
    $modelo = (int)$_POST["modelo"];
    $color = htmlspecialchars($_POST["color"]);
    $cabezal_frontal = htmlspecialchars($_POST["cabezal_frontal"]);
    $cabezal_trasero = htmlspecialchars($_POST["cabezal_trasero"]);
    $mensulas = htmlspecialchars($_POST["mensulas"]);
    $patines = htmlspecialchars($_POST["patines"]);
    $manivelas = htmlspecialchars($_POST["manivelas"]); 
    $llantas = htmlspecialchars($_POST["llantas"]);
    $medida = htmlspecialchars($_POST["llanta_medida"]);
    $rin = htmlspecialchars($_POST["rin"]);
    $rin_medida = htmlspecialchars($_POST["rin_medida"]);
    $material = htmlspecialchars($_POST["material_rin"]);
    $birlo = htmlspecialchars($_POST["birlo"]);
    $perno_rey = htmlspecialchars($_POST["perno_rey"]);
    $ejes = htmlspecialchars($_POST["ejes"]);
    $no_ejes = htmlspecialchars($_POST["num_ejes"]);
    $frenos_neu = htmlspecialchars($_POST["frenos_neu"]);
    $susp_neu = htmlspecialchars($_POST["susp_neu"]);
    $eje_retractil = htmlspecialchars($_POST["eje_retractil"]);
    $tipo = htmlspecialchars($_POST["tipo"]);
    $gancho_arrastre = htmlspecialchars($_POST["gancho_arrastre"]);
    $porta_llantas = htmlspecialchars($_POST["porta_llantas"]);
               
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
    "cabezal_frontal" => array(
        "Fabricado en 1/4 pulgadas conformando un cajón tipo C para conexiones neumáticas y eléctricas" => 1000
    ),
    "cabezal_trasero" => array(
        "Con 1 par de candados fijos tipo twist lock" => 1000
    ),
    "mensulas" => array(
        "1 par de ménsulas en zona frontal, con un twist lock"=> 1000,
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
    ),
    "llanta_medida" => array(
        "11R22.5" => 100,
        "11R24.5" => 200,
    ),
    "rin" => array(
        "8" => 200,
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
    "perno_rey" => array(
        "Wallace Forge de 3/8" => 100,
    ),
    "ejes" => array(
        "De 30,000 lbs con 77.5 pulgadas de track" => 1000,
    ),
    "no_ejes" => array(
        "2" => 1000,
    ),
    "frenos_neu" => array(
        "Sistema ABS - 2S1M de acuerdo a SCT" => 2000
    ),
    "susp_neu" => array(
        "Azteca King AK-300 de 30,000 lbs de capacidad" => 1000,
    ),
    "eje_retractil" => array(
        "1" => 700,
    ),
    "tipo" => array(
        "Brazo central con camara de aire" => 1000,
        "UBL" => 3000,
    ),
    "gancho_arrastre" => array(
        "Colocar placa sin gancho de arrastre" => 50,
        "Colocar placa con gancho de arrastre Premier 2400 (2 pulgadas 10 barrenos)"=> 250,
        "Colocar placa con gancho de arrastre Wallace Forge R50-10 (2 pulgadas 10 barrenos)"=> 200,
        "Colocar placa con gancho de arrastre Holland"=> 300,
    ),
    "portallantas" => array(
        "1" => 1000,
    ),
);

$modeloPrecio = $precios["modelo"][$modelo];
$colorPrecio = $precios["color"][$color];
$cabezal_frontalPrecio = $precios["cabezal_frontal"][$cabezal_frontal];
$cabezal_traseroPrecio = $precios["cabezal_trasero"][$cabezal_trasero];
$mensulasPrecio =$precios["mensulas"][$mensulas];
$patinesPrecio = $precios["patines"][$patines];
$manivelasPrecio= $precios["manivelas"][$manivelas];
$llantasPrecio = $precios["llantas"][$llantas];
$medidaPrecio =$precios["llanta_medida"][$medida];
$rinPrecio = $precios["rin"][$rin];
$rin_medidaPrecio=$precios["rin_medida"][$rin_medida];
$materialPrecio =$precios["material_rin"][$material];
$birloPrecio =$precios["birlo"][$birlo];
$perno_reyPrecio =$precios["perno_rey"][$perno_rey];
$ejesPrecio =$precios["ejes"][$ejes];
$no_ejesPrecio = $precios["no_ejes"][$no_ejes];
$frenos_neuPrecio =$precios["frenos_neu"][$frenos_neu];
$susp_neuPrecio =$precios["susp_neu"][$susp_neu];
$eje_retractilPrecio =$precios["eje_retractil"][$eje_retractil];
$tipoPrecio =$precios["tipo"][$tipo];
$gancho_arrastrePrecio = $precios["gancho_arrastre"][$gancho_arrastre];


$precioTotal= $modeloPrecio +$colorPrecio +$cabezal_frontalPrecio +$cabezal_traseroPrecio +$mensulasPrecio +$patinesPrecio +$manivelasPrecio +$llantasPrecio +$medidaPrecio +$rinPrecio +$rin_medidaPrecio +$materialPrecio +$birloPrecio +$perno_reyPrecio +$ejesPrecio +$no_ejesPrecio +$frenos_neuPrecio +$susp_neuPrecio +$eje_retractilPrecio +$tipoPrecio +$gancho_arrastrePrecio;

$conexion = new mysqli("127.0.0.1", "root", "", "cotizador");
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

// Ejemplo de inserción de datos en una tabla "cotizaciones"

$sql = "INSERT INTO porta24 (nombre,correo,telefono,modelo, color, cabezal_frontal, cabezal_trasero, mensulas, patines, manivelas, llantas, llantamedida, rin, rinmedida, material, birlo, perno_rey, ejes, no_ejes, frenos_neu, susp_neu, eje_retractil, tipo, gancho_arrastre, porta_llantas, precio_total)
VALUES ('$nombre','$email','$telefono','$modelo','$color','$cabezal_frontal','$cabezal_trasero','$mensulas','$patines','$manivelas','$llantas','$medida','$rin','$rin_medida','$material','$birlo','$perno_rey','$ejes','$no_ejes','$frenos_neu','$susp_neu','$eje_retractil','$tipo','$gancho_arrastre','$porta_llantas','$precioTotal')";

$stmt = $conexion->prepare($sql);
if (!$stmt) {
    die("Error en la sentencia preparada: " . $conexion->error);
}

if ($stmt->execute()) {
    header("Location:../html/enviado.html");
} else {
    echo "Error al guardar la cotización: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>

