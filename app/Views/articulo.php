<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articulos</title>
</head>

<body>
  <div style="height:100vh;display:flex;justify-content:center;align-items:center;flex-direction:column;">
    <a href="<?php echo base_url('articulos'); ?>" title="Ver todos los articulos">
    Ver todos los articulos</a>
    <p>Este es el artículo.</p>
    <h1><?php echo $titulo; ?></h1>
    <h3><?php echo $descripcion; ?></h3>
    <p><?php echo $cuerpo; ?></p>
  </div>
</body>

</html>