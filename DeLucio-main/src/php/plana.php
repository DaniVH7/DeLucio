<?php
$nombre = $_POST["nombre"];
$email = $_POST["correo"];
$telefono = $_POST["telefono"];
$modelo = (int)$_POST["modelo"];
            $color = htmlspecialchars($_POST["color"]);
            $largo = htmlspecialchars($_POST["largo"]);
            $piso = htmlspecialchars($_POST["piso"]);
            $patines = htmlspecialchars($_POST["patines"]);
            $llantas = htmlspecialchars($_POST["llantas"]);
            $medida = htmlspecialchars($_POST["llanta_medida"]);
            $rin = htmlspecialchars($_POST["rin"]);
            $rin_medida = htmlspecialchars($_POST["rin_medida"]);
            $material = htmlspecialchars($_POST["material_rin"]);
            $frenos_neu = htmlspecialchars($_POST["frenos_neu"]);
            $frente_lam = htmlspecialchars($_POST["frente_lam"]);
            $loderas = htmlspecialchars($_POST["porta_loderas"]);
            $guarda = htmlspecialchars($_POST["guarda"]);
            $ejes = htmlspecialchars($_POST["ejes"]);
            $perno_rey = htmlspecialchars($_POST["perno_rey"]);
            $manivelas = htmlspecialchars($_POST["manivelas"]);
            $gancho_arrastre = htmlspecialchars($_POST["gancho_arrastre"]);
            $susp_neu = htmlspecialchars($_POST["susp_neu"]);
            $matracas = htmlspecialchars($_POST["matracas"]);
            $caja_herramientas = htmlspecialchars($_POST["caja_herramientas"]);
            $letrero = htmlspecialchars($_POST["letrero"]);
            $placa_perso = htmlspecialchars($_POST["placa_perso"]);


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
                "largo" => array(
                    "24 ft" => 50,
                    "26 ft" => 100,
                    "30 ft" => 150,
                    "35 ft" => 200,
                    "36 ft" => 250,
                    "38 ft" => 300,
                    "40 ft" => 350,
                    "42 ft" => 400,
                    "43 ft" => 450,
                    "48 ft" => 500,
                    "48 ft" => 550,
                    "50 ft" => 600,
                    "53 ft" => 650,

                ),
                "piso" => array(
                    "Canaleta antiderrapante C-10"=> 100,
                    "Plastitabla C-10"=> 150,
                    "Piso de cumahuayo de primera en 11/4"=> 200,
                    "Piso de pino de primera en 11/4, C-12 y antiderrapante"=> 250,
                    "Lamina antiderrapante C-12"=> 300 
                ),
                "patines" => array(
                    "1 juego de patines" => 100,
                    "2 juegos de patines" => 200
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
                "matracas" => array(
                    "Fijas" => 100,
                    "Corrediza (Riel logistico)" => 200
                ),
                "caja_herramientas" => array(
                    "Central" => 100,
                    "Lateral" => 200
                ),
                "frenos_neu" => array(
                    "Sistema ABS - 2S1M de acuerdo a SCT" => 100,
                ),
                "frente_lam" => array(
                    "No aplica" => 0,
                    "1.10 m"=> 100,
                    "1.50 m"=> 150,
                    "1.80 m"=> 180,
                    "2.00"=> 200,
                    "2.10"=> 210,
                    "2.20"=> 220,
                ),
                "loderas" => array(
                    "Si" => 100,
                ),
                "guarda" => array(
                    "Si" => 100,
                    "No" => 0
                ),
                "ejes" => array(
                    "De 30,000 lb,77.5 pulgadas de Track" =>300,
                ),
                "perno_rey" => array(
                    "Wallace Forge de 3/8" => 200
                ),
                "manivelas" => array(
                    "Lado piloto" => 100,
                    "Lado copiloto" => 200
                ),
                "gancho_arrastre" => array(
                    "Colocar placa sin gancho de arrastre" => 50,
                    "Colocar placa con gancho de arranque Premier 2400(2 pulgadas 10 barrenos)" => 100,
                    "Colocar placa con gancho de arranque Premier 2880 (3 pulgadas 6 barrenos)"=> 200,
                    "Colocar placa con gancho de arrastre Wallace Forge R50-10 (2 pulgadas 10 barrenos)"=> 250,
                    "Colocar placa con gancho de arrastre Holland"=> 300,
                ),
                "susp_neu" => array(
                    "Azteca King AK-300 de 30,000 lbs de capacidad" => 200,
                ),
                "material_rin" => array(
                    "Acero" => 1000,
                    "Aluminio" => 1500
                ),
                "letrero" => array(
                    "Si" => 100
                ),  
                "placa_perso" => array(
                    "Si" => 100,
                    "No" => 0
                ),
            );

    $modeloPrecio = $precios["modelo"][$modelo];
    $colorPrecio = $precios["color"][$color];
    $largoPrecio = $precios["largo"][$largo];
    $pisoPrecio = $precios["piso"][$piso];
    $patinesPrecio = $precios["patines"][$patines];
    $llantasPrecio = $precios["llantas"][$llantas];
    $medidaPrecio = $precios["llanta_medida"][$medida];
    $rinPrecio = $precios["rin"][$rin];
    $rin_medidaPrecio = $precios["rin_medida"][$rin_medida];
    $materialPrecio = $precios["material_rin"][$material];
    $frenos_neuPrecio = $precios["frenos_neu"][$frenos_neu];
    $frente_lamPrecio = $precios["frente_lam"][$frente_lam];
    $loderasPrecio = $precios["loderas"][$loderas];
    $guardaPrecio = $precios["guarda"][$guarda];
    $ejesPrecio = $precios["ejes"][$ejes];
    $perno_reyPrecio = $precios["perno_rey"][$perno_rey];
    $manivelasPrecio = $precios["manivelas"][$manivelas];
    $gancho_arrastrePrecio = $precios["gancho_arrastre"][$gancho_arrastre];
    $susp_neuPrecio = $precios["susp_neu"][$susp_neu];
    $matracasPrecio = $precios["matracas"][$matracas];
    $caja_herramientasPrecio = $precios["caja_herramientas"][$caja_herramientas];
    $letreroPrecio = $precios["letrero"][$letrero];
    $placa_persoPrecio = $precios["placa_perso"][$placa_perso];

    $precioTotal = $modeloPrecio + $colorPrecio +$largoPrecio+ $pisoPrecio+$patinesPrecio+$llantasPrecio+$medidaPrecio+$rinPrecio+$rin_medidaPrecio+$frenos_neuPrecio+ $frente_lamPrecio+$loderasPrecio+$guardaPrecio+$ejesPrecio+$perno_reyPrecio+$manivelasPrecio+$gancho_arrastrePrecio+$susp_neuPrecio+$matracasPrecio+$caja_herramientasPrecio+$letreroPrecio+$placa_persoPrecio;
    
    $conexion = new mysqli("127.0.0.1", "root", "", "cotizador");
    if ($conexion->connect_error) {
        die("Error al conectar a la base de datos: " . $conexion->connect_error);
    }
    
    // Ejemplo de inserción de datos en una tabla "cotizaciones"
    $sql = "INSERT INTO plana (nombre,correo,telefono,modelo,color,largo,piso,patines,llantas,medida,rin,rin_medida,material,frenos_neu,frente_lam,loderas,guarda,ejes,perno_rey,manivelas,gancho_arrastre,susp_neu,matracas,caja_herramientas,letrero,placa_perso,precio_total) VALUES ('$nombre','$email','$telefono','$modelo', '$color', '$largo', '$piso', '$patines','$llantas', '$medida', '$rin', '$rin_medida', '$material', '$frenos_neu', '$frente_lam', '$loderas', '$guarda','$ejes','$perno_rey', '$manivelas', '$gancho_arrastre','$susp_neu','$matracas','$caja_herramientas','$letrero','$placa_perso', '$precioTotal')";
    
    if ($conexion->query($sql) === TRUE) {
        header("Location:../html/enviado.html");
    } else {
        echo "Error al guardar la cotización: " . $conexion->error;
    }
    
    $conexion->close();

?>
</body>
</html>