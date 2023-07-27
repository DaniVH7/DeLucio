<?php
    $modelo = (int)$_POST["modelo"];
    $color = htmlspecialchars($_POST["color"]);
    $cabezal_frontal = htmlspecialchars($_POST["cabezal_frontal"]);
    $cabezal_trasero = htmlspecialchars($_POST["cabezal_trasero"]);
    $llantas = htmlspecialchars($_POST["llantas"]);
    $medida = htmlspecialchars($_POST["llanta_medida"]);
    $rin = htmlspecialchars($_POST["rin"]);
    $rin_medida = htmlspecialchars($_POST["rin_medida"]);
    $material = htmlspecialchars($_POST["material_rin"]);
    $birlo = htmlspecialchars($_POST["birlo"]); 
    $lubricacion = htmlspecialchars($_POST["lubricacion"]); 
    $porta_loderas = htmlspecialchars($_POST["porta_loderas"]); 
    $ejes = htmlspecialchars($_POST["ejes"]);
    $perno_rey = htmlspecialchars($_POST["perno_rey"]); 
    $patines = htmlspecialchars($_POST["patines"]);
    $manivelas = htmlspecialchars($_POST["manivelas"]);  
    $gancho_arrastre = htmlspecialchars($_POST["gancho_arrastre"]);
    $frenos_neu = htmlspecialchars($_POST["frenos_neu"]);
    $eje_retractil = htmlspecialchars($_POST["eje_retractil"]);
    $tipo = htmlspecialchars($_POST["tipo"]);
    $porta_llantas = htmlspecialchars($_POST["portallantas"]);
    $susp_neu = htmlspecialchars($_POST["susp_neu"]);

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
    "cabezal_frontal" => array(
        "Con 1 par de seguros tipo pin-lock de 1 pulgada de diámetro" => 100,
    ),
    "cabezal_trasero" => array(
        "Con 1 par de ménsulas centrales fijas, con 1 twist lock retráctil cada una" => 200,
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
    "porta_loderas" => array(
        "Si" => 100
    ),
    "ejes" => array(
        "De 30,000 lbs con 77.5 pulgadas de Track" => 100,
    ),
    "perno_rey" => array(
        "Wallace Forge de 3/8" => 100,
    ),
    "patines" => array(
        "1 juego de patines" => 100,
    ),
    "manivelas"=> array(
        "Lado piloto" => 100,
        "Lado copiloto" => 100
    ),
    "gancho_arrastre" => array(
        "Colocar placa sin gancho de arrastre" => 50,
        "Colocar placa con gancho de arrastre Premier 2400 (2 pulgadas 10 barrenos)"=> 250,
        "Colocar placa con gancho de arrastre Wallace Forge R50-10 (2 pulgadas 10 barrenos)"=> 200,
        "Colocar placa con gancho de arrastre Holland"=> 300,
    ),
    "frenos_neu" => array(
        "Sistema ABS – 2S1M de acuerdo a SCT" => 200
    ),
    "eje_retractil" => array(
        "1" => 100,
    ),
    "tipo" => array(
        "Brazo central" => 100,
        "UBL" => 300,
    ),
    "portallantas" => array(
        "No" => 100,
        "Tipo cinturon" => 200
    ),  
    "susp_neu" => array(
        "Azteca King AK-300 de 30,000 lbs de capacidad" => 100,
    ),
);

$modeloPrecio = $precios["modelo"][$modelo];
$colorPrecio = $precios["color"][$color];
$cabezal_frontalPrecio = $precios["cabezal_frontal"][$cabezal_frontal];
$cabezal_traseroPrecio = $precios["cabezal_trasero"][$cabezal_trasero];
$llantasPrecio = $precios["llantas"][$llantas];
$medidaPrecio = $precios["llanta_medida"][$medida];
$rinPrecio = $precios["rin"][$rin];
$rin_medidaPrecio = $precios["rin_medida"][$rin_medida];
$materialPrecio = $precios["material_rin"][$material];
$birloPrecio = $precios["birlo"][$birlo];
$lubricacionPrecio = $precios["lubricacion"][$lubricacion];
$ejesPrecio = $precios["ejes"][$ejes];
$portaloderas = $precios["porta_loderas"][$porta_loderas];
$perno_reyPrecio = $precios["perno_rey"][$perno_rey];
$patinesPrecio = $precios["patines"][$patines];
$manivelasPrecio = $precios["manivelas"][$manivelas];
$gancho_arrastrePrecio = $precios["gancho_arrastre"][$gancho_arrastre];
$frenos_neuPrecio = $precios["frenos_neu"][$frenos_neu];
$eje_retractilPrecio = $precios["eje_retractil"][$eje_retractil];
$tipoPrecio = $precios["tipo"][$tipo];
$porta_llantasPrecio = $precios["portallantas"][$porta_llantas];
$susp_neuPrecio = $precios["susp_neu"][$susp_neu];

$precioTotal = $modeloPrecio+$colorPrecio+$cabezal_frontalPrecio+$cabezal_traseroPrecio+$llantasPrecio+$medidaPrecio+$rinPrecio+$rin_medidaPrecio+$materialPrecio+$birloPrecio+$lubricacionPrecio+$ejesPrecio+$portaloderas+$perno_reyPrecio+$patinesPrecio+$manivelasPrecio+$gancho_arrastrePrecio+$frenos_neuPrecio+$eje_retractilPrecio+$tipoPrecio+$porta_llantasPrecio+$susp_neuPrecio;

$conexion = new mysqli("127.0.0.1", "root", "", "cotizador");
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

// Ejemplo de inserción de datos en una tabla "cotizaciones"
$sql = "INSERT INTO portaextensible (modelo,color,cabezal_frontal,cabezal_trasero,llantas,llantamedida,rin,rinmedida,material,birlo,lubricacion,ejes,portaloderas,perno_rey,patines,manivelas,gancho_arrastre,frenos_neu,eje_retractil,tipo,porta_llantas,susp_neu,precio_total) 
VALUES (
    '$modelo',
    '$color',
    '$cabezal_frontal',
    '$cabezal_trasero',
    '$llantas',
    '$medida',
    '$rin',
    '$rin_medida',
    '$material',
    '$birlo',
    '$lubricacion',
    '$ejes',
    '$portaloderas',
    '$perno_rey',
    '$patines',
    '$manivelas',
    '$gancho_arrastre',
    '$frenos_neu',
    '$eje_retractil',
    '$tipo',
    '$porta_llantas',
    '$susp_neu',
    '$precioTotal'
)";

if ($conexion->query($sql) === TRUE) {
    echo "Cotización guardada correctamente en la base de datos.";
} else {
    echo "Error al guardar la cotización: " . $conexion->error;
}

$conexion->close();

?>
