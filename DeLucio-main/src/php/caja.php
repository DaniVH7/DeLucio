<?php
    $modelo = (int)$_POST["modelo"];
    $color = htmlspecialchars($_POST["color"]);
    $frente_exterior = htmlspecialchars($_POST["frente_exterior"]);
    $postes_verticales = htmlspecialchars($_POST["postes_verticales"]);
    $costado = htmlspecialchars($_POST["costado_exterior"]);
    $postes_laterales = htmlspecialchars($_POST["postes_laterales"]);
    $marco = htmlspecialchars($_POST["marco_trasero"]); 
    $puertas = htmlspecialchars($_POST["puerta"]); 
    $techo = htmlspecialchars($_POST["techo"]); 
    $cargadores = htmlspecialchars($_POST["cargadores"]); 
    $llantas = htmlspecialchars($_POST["llantas"]);
    $medida = htmlspecialchars($_POST["llanta_medida"]);
    $rin = htmlspecialchars($_POST["rin"]);
    $rin_medida = htmlspecialchars($_POST["rin_medida"]);
    $material = htmlspecialchars($_POST["material"]);
    $piso = htmlspecialchars($_POST["piso"]);
    $forro = htmlspecialchars($_POST["forro"]); 
    $paneles = htmlspecialchars($_POST["paneles"]); 
    $material = htmlspecialchars($_POST["material"]); 
    $perno_rey = htmlspecialchars($_POST["perno_rey"]);
    $patines = htmlspecialchars($_POST["patines"]);
    $ejes = htmlspecialchars($_POST["ejes"]);
    $susp_neu = htmlspecialchars($_POST["susp_neu"]);
    $loderas = htmlspecialchars($_POST["loderas"]);
    $frenos_neu = htmlspecialchars($_POST["frenos_neu"]);  
    
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
        "frente_exterior" => array(
            "Hoja Frontal Exterior En Aluminio Calibre 18" => 1000,
        ),
        "postes_verticales" => array(
            "6 Postes Tipo Sombrero De 2” Galvanizados." => 1000,
        ),
        "costado_exterior" => array(
            "Panel en lamina de aluminio calibre 18, poste logístico galvanizado." => 1000,
        ),
        "postes_laterales" => array(
            "Poste Logístico en Acero Galvanizado." => 1000,
        ),
        "marco_trasero" => array(
            "Fabricado En Acero Al Carbón En placa de 1/4” y 3/16” engargolada para dar mayor rigidez, Travesaño Superior De Bajo Perfil, Postes Cuadrados Reforzados Con Ángulos En Las Esquinas Superiores." => 1000,
        ),
        "puertas" => array(
            "Un herraje por puerta,fabricada En Panel Dura Plate En ½” Con 5 Bisagras Y Una Barras De Cierre Con Bujes De Nylon Por Puerta De 1”." => 1000,
            "Doble herraje por puerta,fabricada En Panel Dura Plate En ½” Con 5 Bisagras Y Una Barras De Cierre Con Bujes De Nylon Por Puerta De 1”." => 2000,
        ),
        "techo" => array(
            "La Hoja De Techo En Aluminio En Calibre 19 De Aluminio, Tensada Antes De La Instalación Arcos De Techo De 1” En Acero Galvanizado, 24” Y 12” Centros Previamente Pegados A La Lámina Del Techo, Utilizando 4 Remaches Solidos Dos Por Extremo A Las Bordas Superiores De Cada Costado." => 1000,
        ),
        "cargadores" => array(
            "Viga Tipo Ipr De 4” En Acero Negro Con Capacidad De 80 000 Lbs Ubicadas A 8” Y 12” Centros" => 1000
        ),
        "llantas" => array(
            "8" => 2000,
        ),
        "llanta_medida" => array(
            "11R22.5" => 1000,
        ),
        "rin" => array(
            "8" => 1000,
        ),
        "rin_medida" => array(
            "11R22.5" => 1200,
        ),
        "piso" => array(
            "Madera laminada de encino de 1 3/8” en la parte trasera con placa de acero antiderrapante calibre 12”." => 1200,
        ),
        "forro" => array(
            "Doble zoclo (delantero y trasero )en acero galvanizado A 12” de altura" => 1200,
        ),
        "paneles" => array(
            "Fijos" => 1000,
        ),
        "material" => array(
            "Composite" => 1200,
            "Hoja poste" => 1500
        ),
        "perno_rey" => array(
            "Perno rey de 1/4" => 1200,
        ),
        "patines" => array(
            "Un juego de 2 velocidades" => 1200,
        ),
        "ejes" => array(
            "De 30,000 lbs, 77.5 pulgadas de Track" => 1200,
        ),
        "susp_neu" => array(
            "De 30,000 lbs tipo vantrax con suspensión integral Y componentes de deslizamiento de carro neumático en marca hendrickson®." => 1200,
        ),
        "loderas" => array(
            "Dos blancas con logotipo de nuestra empresa" => 1200,
        ),
        "frenos_neu" => array(
            "Sistema ABS de acuerdo a la norma 035 y dot 121 la fmvss 121" => 1200,
        ),
    );
    
    $modeloPrecio = $precios["modelo"][$modelo];
    $colorPrecio = $precios["color"];
    $frente_exteriorPrecio = $precios["frente_exterior"][$frente_exterior];
    $postes_verticalesPrecio = $precios["postes_verticales"][$postes_verticales];
    $costado_exteriorPrecio = $precios["costado_exterior"][$costado];
    $postes_lateralesPrecio = $precios["postes_laterales"][$postes_laterales];
    $marcoPrecio = $precios["marco_trasero"][$marco];
    $puertasPrecio = $precios["puertas"][$puertas];
    $techoPrecio = $precios["techo"][$techo];
    $cargadoresPrecio = $precios["cargadores"][$cargadores];
    $llantasPrecio = $precios["llantas"][$llantas];
    $llanta_medidaPrecio = $precios["llanta_medida"][$medida];
    $rinPrecio = $precios["rin"][$rin];
    $rin_medidaPrecio = $precios["rin_medida"][$rin_medida];
    $pisoPrecio = $precios["piso"][$piso];
    $forroPrecio = $precios["forro"][$forro];
    $panelesPrecio = $precios["paneles"][$paneles];
    $materialPrecio = $precios["material"][$material];
    $perno_reyPrecio = $precios["perno_rey"][$perno_rey];
    $patinesPrecio = $precios["patines"][$patines];
    $ejesPrecio = $precios["ejes"][$ejes];
    $susp_neuPrecio = $precios["susp_neu"][$susp_neu];
    $loderasPrecio = $precios["loderas"][$loderas];
    $frenos_neuPrecio = $precios["frenos_neu"][$frenos_neu];

    $precioTotal = $modeloPrecio + $colorPrecio + $frente_exteriorPrecio + $postes_verticalesPrecio + $costado_exteriorPrecio + $postes_lateralesPrecio + $marcoPrecio + $puertasPrecio + $techoPrecio + $cargadoresPrecio + $llantasPrecio + $llanta_medidaPrecio + $rinPrecio + $rin_medidaPrecio + $pisoPrecio + $forroPrecio + $panelesPrecio + $materialPrecio + $perno_reyPrecio + $patinesPrecio + $ejesPrecio + $susp_neuPrecio + $loderasPrecio + $frenos_neuPrecio;

    $conexion = new mysqli("127.0.0.1", "root", "", "cotizador");
    if ($conexion->connect_error) {
        die("Error al conectar a la base de datos: " . $conexion->connect_error);
    }

    // Ejemplo de inserción de datos en una tabla "cotizaciones"
    $sql = "INSERT INTO caja (modelo,color,frente_exterior,postes_verticales,costado,postes_laterales,marco_trasero,puertas,techo,cargadores,llantas,llantamedida,rin,rinmedida,piso,forro,paneles,material,perno_rey,ejes,susp_neu,loderas,frenos_neu,precio_total) 
    VALUES ('$modelo','$color','$frente_exterior','$postes_verticales','$costado','$postes_laterales','$marco','$puertas','$techo','$cargadores','$llantas','$medida','$rin','$rin_medida','$piso','$forro','$paneles','$material','$perno_rey','$ejes','$susp_neu','$loderas','$frenos_neu','$precioTotal')";

    if ($conexion->query($sql) === TRUE) {
        header("Location:../html/enviado.html");
    } else {
        echo "Error al guardar la cotización: " . $conexion->error;
    }

    $conexion->close();

?>
    