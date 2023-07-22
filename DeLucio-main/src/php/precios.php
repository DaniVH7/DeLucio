<?php
try {
    $conMySQL = new PDO("mysql:host=localhost; port=3306;dbname=cotizador", "root", "");
    $conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $modelo = (int)$_POST["modelo"];
    $alto = htmlspecialchars($_POST["alto"]);
    $ojillo = htmlspecialchars($_POST["ojillo_tiron"]);
    $lanza = htmlspecialchars($_POST["largo_lanza"]);
    $alturaquinta = htmlspecialchars($_POST["altura_quinta"]);
    $material = htmlspecialchars($_POST["material_rin"]);
    $precioTotal = htmlspecialchars($_POST["precio"]);

    // Cálculo del total
    $precios = array(
        "modelo" => array(
            "2019" => 500,
            "2020" => 550,
            "2021" => 600,
            "2022" => 650,
            "2023" => 700,
            "2024" => 750
        ),
        "alto" => array(
            "Fijo" => 500
        ),
        "ancho" => array(
            "2.60 m" => 200,
        ),
        "largo" => array(
            "2.47m" => 100,
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
        ),
        "soporte_quinta" => array(
            "fijo" =>20
        ),
        "llantas" => array(
            "8" =>100
        ),
        "llanta_medida" => array(
            "11R22.5" =>100,
            "11R24.5" =>120
        ),
        "rin" => array(
            "Acero" =>100,
            "Aluminio" =>150
        ),
        "rin_medida" => array(
            "11R22.5" =>100,
            "11R24.5" =>120
        ),
        "material_rin" => array(
            "Acero" =>100,
            "Aluminio" =>150
        ),
        "ejes" => array(
            "De 30,000 lbs, 77.5 pulgadas de Track" =>300,
        ),
        "birlo" => array (
            "Corto (AC)" => 100,
            "Largo (AL)" => 150
        ),
        "lubricacion" => array(
            "Grasa" => 100,
            "Aceite" => 150
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

    $total = 0;

    // Realizar la suma de los campos seleccionados
    $total += $precios["modelo"][$modelo];
    $total += $precios["alto"][$alto];
    $total += $precios["ojillo_tiron"][$ojillo];
    $total += $precios["largo_lanza"][$lanza];
    $total += $precios["material_rin"][$material];
    $total += $precios["altura_quinta"][$alturaquinta];

    // ...

    // Sumar el valor del precio total al total
    $total += $precioTotal;

    $sentenciaSQL = "INSERT INTO precios VALUES (null,?,?,?,?,?,?)";

    $sentenciaPrep = $conMySQL->prepare($sentenciaSQL);
    $sentenciaPrep->bindParam(1, $modelo);
    $sentenciaPrep->bindParam(2, $alto);
    $sentenciaPrep->bindParam(3, $ojillo);
    $sentenciaPrep->bindParam(4, $lanza);
    $sentenciaPrep->bindParam(5, $material);
    $sentenciaPrep->bindParam(6, $alturaquinta);

    if ($sentenciaPrep->execute()) {
        header("Location:../html/enviado.html");
        exit();
    } else {
        echo "Error al almacenar en la Base de Datos";
    }
    
} catch (PDOException $e) {
    echo "¡Error en la conexión a la base de datos!";
    error_log($e->getMessage());

} catch (Exception $e) {
    echo "¡Error inesperado!";
    error_log($e->getMessage());
}
?>
