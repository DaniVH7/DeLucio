<!DOCTYPE html>
<html>
<head>
<title> Insertar registros</title>
</head>
<body>
<?php
try
{
$conMySQL = new PDO("mysql:host=localhost; port=3306;dbname=cotizador", "root", "");

$conMySQL->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $bd_host = "127.0.0.1";
            $bd_user = "root";
            $bd_pass = "";
            $bd_name = "cotizador";
            #
            $modelo = (int)$_POST["modelo"];
            $color = htmlspecialchars($_POST["color"]);
            $largo = (int)($_POST["largo"]);
            $piso = (int)($_POST["piso"]);
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
                       
$sentenciaSQL = "INSERT INTO plana
values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$sentenciaPrep = $conMySQL->prepare($sentenciaSQL);
$sentenciaPrep->bindParam(1, $modelo);
$sentenciaPrep->bindParam(2, $color);
$sentenciaPrep->bindParam(3, $largo);
$sentenciaPrep->bindParam(4, $piso);
$sentenciaPrep->bindParam(5, $patines);
$sentenciaPrep->bindParam(6, $llantas);
$sentenciaPrep->bindParam(7, $medida);
$sentenciaPrep->bindParam(8, $rin);
$sentenciaPrep->bindParam(9, $rin_medida);
$sentenciaPrep->bindParam(10, $material);
$sentenciaPrep->bindParam(11, $frenos_neu);
$sentenciaPrep->bindParam(12, $frente_lam);
$sentenciaPrep->bindParam(13, $loderas);
$sentenciaPrep->bindParam(14, $guarda);
$sentenciaPrep->bindParam(15, $ejes);
$sentenciaPrep->bindParam(16, $perno_rey);
$sentenciaPrep->bindParam(17, $manivelas);
$sentenciaPrep->bindParam(18, $gancho_arrastre);
$sentenciaPrep->bindParam(19, $susp_neu);
$sentenciaPrep->bindParam(20, $matracas);
$sentenciaPrep->bindParam(21, $caja_herramientas);
$sentenciaPrep->bindParam(22, $letrero);
$sentenciaPrep->bindParam(23, $placa_perso);

if ($sentenciaPrep->execute())
{
    header("Location:../html/enviado.html");
}
else
{
printf("Error al almacenar en la Base de Datos");
}
}
catch (PDOException $e)
{
print "¡Error!: " . $e->getMessage() . "</br>";
die();
}
finally
{ $conMySQL = null; }
?>
</body>
</html>