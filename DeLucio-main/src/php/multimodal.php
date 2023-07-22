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
               
$sentenciaSQL = "INSERT INTO multimodal
values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$sentenciaPrep = $conMySQL->prepare($sentenciaSQL);
$sentenciaPrep->bindParam(1, $modelo);
$sentenciaPrep->bindParam(2, $color);
$sentenciaPrep->bindParam(3, $cabezal_frontal);
$sentenciaPrep->bindParam(4, $cabezal_trasero);
$sentenciaPrep->bindParam(5, $piso);
$sentenciaPrep->bindParam(6, $mensulas_centrales);
$sentenciaPrep->bindParam(7, $manivelas);
$sentenciaPrep->bindParam(8, $llantas);
$sentenciaPrep->bindParam(9, $medida);
$sentenciaPrep->bindParam(10, $rin);
$sentenciaPrep->bindParam(11, $rin_medida);
$sentenciaPrep->bindParam(12, $material);
$sentenciaPrep->bindParam(13, $gancho_arrastre);
$sentenciaPrep->bindParam(14, $perno_rey);
$sentenciaPrep->bindParam(15, $porta_llantas);
$sentenciaPrep->bindParam(16, $caja_herramientas);
$sentenciaPrep->bindParam(17, $susp_neu);
$sentenciaPrep->bindParam(18, $ejes);
$sentenciaPrep->bindParam(19, $frenos_neu);
$sentenciaPrep->bindParam(20, $eje_retractil);
$sentenciaPrep->bindParam(21, $guarda);


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