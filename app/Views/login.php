<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articulos</title>
</head>

<body>
  <div style="height:100vh;display:flex;justify-content:center;align-items:center;flex-direction:column;">
    <h1>Iniciar sesión</h1>
    <?php echo form_open('usuarios', ['name' => 'login', 'id' => 'login_form']); ?>
      <label for="Usuario"> Usuario</label>
      <input type="text" name="usuario" />
      <br/>
      <label for="contraseña"> Contraseña</label>
      <input type="password" name="pass" />
      <br/>
      <br/>
      <?php echo form_submit('submit', 'Enviar datos', );
      echo form_close(); ?>
      <a href="<?php echo base_url(['usuarios', 'registro']); ?>" title="Deseo registrarme">Registrarme</a>
      <?php if (isset($errors)) { ?>
        <h2><?php echo $errors; ?></h2>
      <?php }?>
  </div>
</body>

</html>