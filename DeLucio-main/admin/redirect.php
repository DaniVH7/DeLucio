<!DOCTYPE html>
<html>
    <head>
      <link rel="shortcut icon" href="../src/img/logo.png">
      <meta charset="utf-8">
        <title>Generar PDF</title>
        <link href="src/css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="complete"><h1>Cotizaciones Completas</h1></div>
        <div class="container">
          <div class="group">
            <button onclick="window.location.href='../reportes/dolly/index.html'" class="equipos">Dolly</button>
            <button onclick="window.location.href='../reportes/portaEstandar/index.html'" class="equipos">Porta contenedor Estandar</button>
            <button onclick="window.location.href='../reportes/portaExtensible/index.html'" class="equipos">Porta contenedor Extensible</button>
          </div>
          <div class="group">
            <button onclick="window.location.href='../reportes/plana/index.html'" class="equipos">Plataforma Plana</button>
            <button onclick="window.location.href='../reportes/multimodal/index.html'" class="equipos">Plataforma Multimodal</button>
            <button onclick="window.location.href='../reportes/gondola/index.html'" class="equipos">Gondola</button>
          </div>
          <div class="group">
            <button onclick="window.location.href='../reportes/porta24/index.html'" class="equipos">Porta 24ft</button>
            <button onclick="window.location.href='../reportes/presurizada/index.html'" class="equipos">Tolva presurizada</button>
            <button onclick="window.location.href='../reportes/caja/index.html'" class="equipos">Caja seca</button>
          </div>
        </div>
<footer>
  <div class="return">
      <form method="post" action="cerrar.php">
            <button type="submit" name="cerrar_sesion" class="equipos">Cerrar sesión</button>
      </form> 
    </div>
</footer>
      </body>
</html>
