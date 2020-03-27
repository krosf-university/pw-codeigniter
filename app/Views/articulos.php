<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articulos</title>
</head>

<body>
  <div style="height:100vh;display:flex;justify-content:center;align-items:center;flex-direction:column;">
    <h1>Bienvenido a la web sobre artículos</h1>
    <a href="<?php echo base_url('formulario'); ?>" title="Añadir articulo">Añadir articulo</a>
    <p>Estos son los artículos publicados.</p>
    <?php foreach ($data as $articulo) { ?>
    <a href="<?php echo base_url(['articulos', $articulo['id']]); ?>" title="Ver articulo">
    <h2><?php echo $articulo['titulo']; ?></h2>
    </a>
    <p><?php echo $articulo['descripcion']; ?></p>
    <br/>
    <?php } ?>

  </div>
</body>

</html>