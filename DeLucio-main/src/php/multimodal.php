<?php
    $modelo = (int)$_POST["modelo"];
    $color = htmlspecialchars($_POST["color"]);
    $cabezal_frontal = htmlspecialchars($_POST["cabezal_frontal"]);
    $cabezal_trasero = htmlspecialchars($_POST["cabezal_trasero"]);
    $piso = htmlspecialchars($_POST["piso"]);
    $mensulas_centrales = htmlspecialchars($_POST["mensulas_centrales"]);
    $manivelas = htmlspecialchars($_POST["manivelas"]); 
    $llantas = htmlspecialchars($_POST["llantas"]);
    $medida = htmlspecialchars($_POST["llanta_medida"]);
    $rin = htmlspecialchars($_POST["rin"]);
    $rin_medida = htmlspecialchars($_POST["rin_medida"]);
    $material = htmlspecialchars($_POST["material_rin"]);
    $gancho_arrastre = htmlspecialchars($_POST["gancho_arrastre"]);
    $perno_rey = htmlspecialchars($_POST["perno_rey"]);
    $porta_llantas = htmlspecialchars($_POST["porta_llantas"]);
    $caja_herramientas = htmlspecialchars($_POST["caja_herramientas"]);
    $susp_neu = htmlspecialchars($_POST["susp_neu"]);
    $ejes = htmlspecialchars($_POST["ejes"]);
    $frenos_neu = htmlspecialchars($_POST["frenos_neu"]);
    $eje_retractil = htmlspecialchars($_POST["eje_retractil"]);
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
    "cabezal_frontal" => array(
        "Con 1 par de seguros tipo pin-lock de 1 pulgada de diámetro" => 50,
    ),
    "cabezal_trasero" => array(
        "Con 1 par de ménsulas centrales fijas, con 1 twist lock retráctil cada una" => 50,
    ),
    "piso" => array(
        "Canaleta antiderrapante C-10"=> 100,
        "Plastitabla C-10"=> 150,
        "Piso de cumahuayo de primera en 11/4"=> 200,
        "Piso de pino de primera en 11/4, C-12 y antiderrapante"=> 250,
        "Lamina antiderrapante C-12"=> 300 
    ),
    "mensulas_centrales" => array(
        "Si" => 80,
    ),
    "manivelas" => array(
        "Lado piloto" => 100,
        "Lado copiloto" => 100,
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
    "gancho_arrastre" => array(
        "Colocar placa sin gancho de arranque" => 50,
        "Colocar placa con gancho de arranque Premier 2400(2 pulgadas 10 barrenos)" => 100,
        "Colocar placa con gancho de arranque Premier 2880 (3 pulgadas 6 barrenos)"=> 200,
        "Colocar placa con gancho de arrastre Wallace Forge R50-10 (2 pulgadas 10 barrenos)"=> 250,
        "Colocar placa con gancho de arrastre Holland"=> 300,
    ),
    "perno_rey" => array(
        "Wallace Forge de 3/8" => 100,
    ),
    "porta_llantas" => array(
        "Si" => 100,
    ),
    "frenos_neu" => array(
        "Sistema ABS - 2S1M de acuerdo a SCT" => 200
    ),
    "caja_herramientas" => array(
        "Interior" => 100,
        "Entre vigas" => 200
    ),
    "susp_neu" => array(
        "Azteca King Ak-300 de 30,000 lbs de capacidad" => 100,
    ),
    "ejes" => array(
        "De 30,000 lbscon 77.5 pulgadas de track" => 100,
    ),
    "susp_neu" => array(
        "Azteca King Ak-300 de 30,000 lbs de capacidad" => 100,
    ),
    "eje_retractil" => array(
        "Brazo central con camara de aire" => 100,
        "UBL"=> 200
    ),
    "guarda" => array(
        "Si" => 100,
    ),
);

$modeloPrecio = $precios["modelo"][$modelo];
$colorPrecio = $precios["color"][$color];
$cabezal_frontalPrecio = $precios["cabezal_frontal"][$cabezal_frontal];
$cabezal_traseroPrecio = $precios["cabezal_trasero"][$cabezal_trasero];
$pisoPrecio = $precios["piso"][$piso];
$mensulas_centralesPrecio = $precios["mensulas_centrales"][$mensulas_centrales];
$manivelasPrecio = $precios["manivelas"][$manivelas];
$llantasPrecio = $precios["llantas"][$llantas];
$medidaPrecio = $precios["llanta_medida"][$medida];
$rinPrecio = $precios["rin"][$rin];
$rin_medidaPrecio = $precios["rin_medida"][$rin_medida];
$materialPrecio = $precios["material_rin"][$material];
$gancho_arrastrePrecio = $precios["gancho_arrastre"][$gancho_arrastre];
$perno_reyPrecio = $precios["perno_rey"][$perno_rey];
$porta_llantasPrecio = $precios["porta_llantas"][$porta_llantas];
$caja_herramientasPrecio = $precios["caja_herramientas"][$caja_herramientas];
$susp_neuPrecio = $precios["susp_neu"][$susp_neu];
$ejesPrecio = $precios["ejes"][$ejes];
$frenos_neuPrecio = $precios["frenos_neu"][$frenos_neu];
$eje_retractilPrecio = $precios["eje_retractil"][$eje_retractil];
$guardaPrecio = $precios["guarda"][$guarda];

$precioTotal = $modeloPrecio +$colorPrecio +$cabezal_frontalPrecio +$cabezal_traseroPrecio +$pisoPrecio +$mensulas_centralesPrecio +$manivelasPrecio +$llantasPrecio +$medidaPrecio +$rinPrecio+$rin_medidaPrecio +$materialPrecio +$gancho_arrastrePrecio +$perno_reyPrecio +$porta_llantasPrecio +$caja_herramientasPrecio +$susp_neuPrecio +$ejesPrecio +$frenos_neuPrecio +$eje_retractilPrecio +$guardaPrecio;


$conexion = new mysqli("127.0.0.1", "root", "", "cotizador");
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

// Ejemplo de inserción de datos en una tabla "cotizaciones"
$sql = "INSERT INTO multimodal (modelo,color,cabezal_frontal,cabezal_trasero,piso,mensulas_centrales,manivelas,llantas,llantamedida,rin,rinmedida,material,gancho_arrastre,perno_rey,porta_llantas,caja_herramientas,susp_neu,ejes,frenos_neu,eje_retractil,guarda,precio_total) 
VALUES ('$modelo', '$color','$cabezal_frontal','$cabezal_trasero', '$piso', '$mensulas_centrales','$manivelas', '$llantas','$medida', '$rin', '$rin_medida', '$material', '$gancho_arrastre', '$perno_rey','$porta_llantas', '$caja_herramientas', '$susp_neu','$ejes','$frenos_neu', '$eje_retractil', '$guarda','$precioTotal')";

if ($conexion->query($sql) === TRUE) {
    echo "Cotización guardada correctamente en la base de datos.";
} else {
    echo "Error al guardar la cotización: " . $conexion->error;
}

$conexion->close();

?>
