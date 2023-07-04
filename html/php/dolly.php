<!DOCTYPE html>
<html>
<head>
<title> Insertar registros - PHP con MYSQL </title>
</head>
<body>
<?php
try
{
            $bd_host = "127.0.0.1";
            $bd_user = "root";
            $bd_pass = "";
            $bd_name = "cotizador";
            #
            $modelo = (int)$_POST["modelo"];
            $alto = htmlspecialchars($_POST["alto"]);
            $ancho = (int)($_POST["ancho"]);
            $largo = (int)($_POST["largo"]);
            $ojillo = htmlspecialchars($_POST["ojillo"]);
            $lanza = htmlspecialchars($_POST["largolanza"]);
            $quintarueda = htmlspecialchars($_POST["quinta"]);
            $alturaquinta = htmlspecialchars($_POST["alturaquinta"]);
            $sopquinta = htmlspecialchars($_POST["sopquinta"]);
            $llantas = htmlspecialchars($_POST["llantas"]);
            $medida = htmlspecialchars($_POST["medida"]);
            $rin = htmlspecialchars($_POST["rin"]);
            $material = htmlspecialchars($_POST["material"]);
            $frenos = htmlspecialchars($_POST["frenos"]);
            $ejes = htmlspecialchars($_POST["ejes"]);
            $birlos = htmlspecialchars($_POST["birlos"]);
            $lubricacion = htmlspecialchars($_POST["lubricacion"]);
            $suspension = htmlspecialchars($_POST["suspension"]);
            $portaplacas = htmlspecialchars($_POST["placas"]);
            $inflado = htmlspecialchars($_POST["inflado"]);
            $loderas = htmlspecialchars($_POST["loderas"]);
            $retractil = htmlspecialchars($_POST["retractil"]);
                       
$sentenciaSQL = "INSERT INTO dolly
values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$sentenciaPrep = $conMySQL->prepare($sentenciaSQL);
$sentenciaPrep->bindParam(1, $modelo);
$sentenciaPrep->bindParam(2, $alto);
$sentenciaPrep->bindParam(3, $ancho);
$sentenciaPrep->bindParam(4, $largo);
$sentenciaPrep->bindParam(5, $ojillo);
$sentenciaPrep->bindParam(6, $lanza);
$sentenciaPrep->bindPAram(7, $quintarueda);
$sentenciaPrep->bindParam(8, $alturaquinta);
$sentenciaPrep->bindParam(9, $sopquinta);
$sentenciaPrep->bindParam(10, $llantas);
$sentenciaPrep->bindParam(11, $medida);
$sentenciaPrep->bindParam(12, $rin);
$sentenciaPrep->bindParam(13, $material);
$sentenciaPrep->bindParam(14, $frenos);
$sentenciaPrep->bindParam(15, $ejes);
$sentenciaPrep->bindParam(16, $birlos);
$sentenciaPrep->bindParam(17, $lubricacion);
$sentenciaPrep->bindParam(18, $suspension);
$sentenciaPrep->bindParam(19, $portaplacas);
$sentenciaPrep->bindParam(20, $inflado);
$sentenciaPrep->bindParam(21, $loderas);
$sentenciaPrep->bindParam(22, $retractil);


if ($sentenciaPrep->execute())
{
    header("Location:../index");
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