<?php
            try
            {
                #
                $conMySQL = new PDO("mysql:host=localhost; dbname=cotizador","root","");
                #
                $conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conMySQL ->exec("SET CHARACTER SET UTF8");
                $sentenciaSQL = "SELECT * FROM usuarios WHERE username= :login AND pass= :passw";
                $sentenciaPrep = $conMySQL->prepare($sentenciaSQL);
                $log=htmlspecialchars(addslashes($_POST["user"]));
                $pass=htmlspecialchars(addslashes($_POST["contra"]));
                $cifredpass = md5($pass);
                $sentenciaPrep->execute(array(":login"=>$log, ":passw"=>$cifredpass));
                $numRegistros = $sentenciaPrep->rowCount();
                if ($numRegistros !=0)
                {
                    header("Location:../../admin/index.html");                    exit;
                } else {
                    echo "<script>alert('El usuario o contraseña son incorrectos.');</script>";
                    echo "<script>window.location.href = '../../admin/inciarSesion.html';</script>";
  
                }                }
            catch(Exception $e)
            {
                exit("Error: " . $e-> getMessage());
            }
            finally{  $conMySQL= null; }
        ?>