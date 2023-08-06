<?php
            $modelo = (int)$_POST["modelo"];
            $color = htmlspecialchars($_POST["color"]);
            $capacidad = htmlspecialchars($_POST["capacidad"]);
            $tuberiaPres = htmlspecialchars($_POST["tuberiaPres"]);
            $tuberiaDes = htmlspecialchars($_POST["tuberiaDes"]);
            $llantas = htmlspecialchars($_POST["llantas"]);
            $medida = htmlspecialchars($_POST["llanta_medida"]);
            $rin = htmlspecialchars($_POST["rin"]);
            $rin_medida = htmlspecialchars($_POST["rin_medida"]);
            $material = htmlspecialchars($_POST["material_rin"]);
            $patines = htmlspecialchars($_POST["patines"]);
            $gancho = htmlspecialchars($_POST["gancho_arrastre"]);
            $portallantas = htmlspecialchars($_POST["portallantas"]);
            $precaucion = htmlspecialchars($_POST["letrero"]);
            $perno_rey = htmlspecialchars($_POST["perno_rey"]);
            $guarda = htmlspecialchars($_POST["guarda"]);
            $placa_perso = htmlspecialchars($_POST["placa_perso"]);
            $no_ejes = htmlspecialchars($_POST["no_ejes"]);
            $ejes = htmlspecialchars($_POST["ejes"]);
            $susp_neu = htmlspecialchars($_POST["susp_neu"]);
            $birlo = htmlspecialchars($_POST["birlo"]);
            $lub = htmlspecialchars($_POST["lubricacion"]);
            $retractil = htmlspecialchars($_POST["eje_retractil"]);
            $tipo = htmlspecialchars($_POST["tipo"]);
            $susp_neu = htmlspecialchars($_POST["susp_neu"]);
            $frenos_neu = htmlspecialchars($_POST["frenos_neu"]);
            $guarda = htmlspecialchars($_POST["guarda"]);
            $auto_inflado = htmlspecialchars($_POST["auto_inflado"]);

            $precio= array(
                "modelo" => array(
                    "2019" => 500,
                    "2020" => 550,
                    "2021" => 600,
                    "2022" => 650,
                    "2023" => 700,
                    "2024" => 750
                ),
                "color" => 100,
                "tuberiaPres" => array(
                "Frontal y trasera en 3 pulgadas con válvula check en cada terminal"=>"400"
                ),
                "tuberiaDes" => array(
                    "En 4 pulgadas por debajo de los ejes (con o sin placa de gancho de arrastre)" => 300,
                    "En 4 pulgadas arriba de los puentes de suspensión (con o sin placa de gancho de arrastre)" => 400,
                    "los puentes de suspensión (solo sin placa de gancho de arrastre)"=> 500,
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
                "patines" => array(
                    "1 juego de patines" => 100,
                    "2 juegos de patines" => 150
                ),
                "gancho_arrastre" => array(
                    "Colocar placa sin gancho de arrastre" => 50,
                    "Colocar placa con gancho de arrastre Premier 2400(2 pulgadas 10 barrenos)" => 100,
                    "Colocar placa con gancho de arrastre Premier 2880 (3 pulgadas 6 barrenos)"=> 200,
                    "Colocar placa con gancho de arrastre Wallace Forge R50-10 (2 pulgadas 10 barrenos)"=> 250,
                    "Colocar placa con gancho de arrastre Holland"=> 300,
                ),
                "portallantas" => array(
                    "Tipo cinturon" => 100,
                    "Tipo cadena" => 200
                ),
                "precaucion" => array(
                    "Si" => 100,
                    "No" => 0
                ),
                "perno_rey" => array(
                    "Wallace Forge de 3/8" => 200
                ),
                "placa_perso" => array(
                    "Si" => 100,
                    "No" => 0
                ),
                "no_ejes" => array(
                    "1" => 100,
                    "2" => 200
                ),
                "ejes" => array(
                    "De 30,000 lbs con 77.5 pulgadas de track" =>300,
                ),
                "birlo" => array(
                    "Corto (AC)" => 100,
                    "Largo (AL)" => 200
                ),
                "lub" =>array(
                    "Grasa" => 200,
                    "Aceite" => 300
                ),
                "eje_retractil" => array(
                    "1er eje" => 700,
                    "2do eje" => 900,
                ),
                "tipo" => array(
                    "Brazo central con camara de aire" => 1000,
                    "UBL" => 3000,
                ),
                "susp_neu" => array(
                    "Azteca King Ak-300 de 30,000 lbs de capacidad" => 1000,
                ),
                "frenos_neu" => array(
                    "Sistema ABS - 2S1M de acuerdo a SCT" => 2000
                ),
                "guarda" => array(
                    "Si" => 800,
                ),
                "auto_inflado" => array(
                    "Si" => 100,
                    "No" => 0
                ),
            );
    
    $modeloPrecio = $precio["modelo"][$modelo];
    $colorPrecio = $precio["color"];
    $tuberiaPresPrecio = $precio["tuberiaPres"][$tuberiaPres];
    $tuberiaDesPrecio = $precio["tuberiaDes"][$tuberiaDes];
    $llantasPrecio = $precio["llantas"][$llantas];
    $llanta_medidaPrecio = $precio["llanta_medida"][$medida];
    $rinPrecio = $precio["rin"][$rin];
    $rin_medidaPrecio = $precio["rin_medida"][$rin_medida];
    $materialPrecio = $precio["material_rin"][$material];
    $patinesPrecio = $precio["patines"][$patines];
    $ganchoPrecio = $precio["gancho_arrastre"][$gancho];
    $portallantasPrecio = $precio["portallantas"][$portallantas];
    $precaucionPrecio = $precio["precaucion"][$precaucion];
    $perno_reyPrecio = $precio["perno_rey"][$perno_rey];
    $placa_persoPrecio = $precio["placa_perso"][$placa_perso];
    $no_ejesPrecio = $precio["no_ejes"][$no_ejes];
    $ejesPrecio = $precio["ejes"][$ejes];
    $birloPrecio = $precio["birlo"][$birlo];
    $lubPrecio = $precio["lub"][$lub];
    $retractilPrecio = $precio["eje_retractil"][$retractil];
    $tipoPrecio = $precio["tipo"][$tipo];
    $susp_neuPrecio = $precio["susp_neu"][$susp_neu];
    $frenos_neuPrecio = $precio["frenos_neu"][$frenos_neu];
    $guardaPrecio = $precio["guarda"][$guarda];
    $auto_infladoPrecio = $precio["auto_inflado"][$auto_inflado];

    $precioTotal = 
    $modeloPrecio + $colorPrecio + $tuberiaPresPrecio + $tuberiaDesPrecio + $llantasPrecio + $llanta_medidaPrecio +
    $rinPrecio + $rin_medidaPrecio + $materialPrecio + $patinesPrecio + $ganchoPrecio + $portallantasPrecio + $precaucionPrecio +
    $perno_reyPrecio + $placa_persoPrecio + $no_ejesPrecio + $ejesPrecio + $birloPrecio + $lubPrecio + $retractilPrecio +
    $tipoPrecio + $susp_neuPrecio + $frenos_neuPrecio + $guardaPrecio + $auto_infladoPrecio;

    $conexion = new mysqli("127.0.0.1", "root", "", "cotizador");
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}
$sql = "INSERT INTO tolva (modelo,color,capacidad,tuberia_presurizada,tuberia_descarga,llantas,llantamedida,rin,rinmedida,material_rin,patines,gancho_arrastre,porta_llantas,precaucion,perno_rey,placa_perso,no_ejes,ejes,birlo,lubricacion,retractil,tipo,susp_neu,frenos_neu,guarda_lateral,auto_inflado,precio_total) VALUES ('$modelo', 
'$color', '$capacidad', '$tuberiaPres', '$tuberiaDes', '$llantas', '$medida', '$rin', '$rin_medida', '$material', '$patines', '$gancho', '$portallantas', '$precaucion', '$perno_rey', '$placa_perso', '$no_ejes', '$ejes', '$birlo', '$lub', '$retractil', '$tipo', '$susp_neu', '$frenos_neu', '$guarda', '$auto_inflado', '$precioTotal')";
if ($conexion->query($sql) === TRUE) {
    header("Location:../html/enviado.html");
} else {
    echo "Error al guardar la cotización: " . $conexion->error;
}

$conexion->close();

?>