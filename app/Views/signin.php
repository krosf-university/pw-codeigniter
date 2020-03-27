<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articulos</title>
</head>

<body>
  <div style="height:100vh;display:flex;justify-content:center;align-items:center;flex-direction:column;">
  <h1>Registrar usuario</h1>
    <?php if (isset($mensaje)) { ?>
    <h2><?php echo $mensaje; ?></h2> 
    <?php } else {?>
    <?php echo form_open(base_url(['usuarios', 'registro']), ['name' => 'form_reg ']),form_label('Nombre', 'Nombre'); ?>
    <?php echo form_input('nombre', set_value('nombre')); ?>
    <br />
    <br />
    <?php echo form_label('Correo', 'Correo'),form_input('correo', set_value('correo')); ?>
    <br />
    <br />
    <?php echo form_label('Usuario', 'Usuario') ,form_input('usuario', set_value('usuario')); ?>
    <br />
    <br />
    <?php echo form_label('Contraseña', 'Contraseña'),form_password('pass'); ?>
    <br />
    <br />
    <?php echo form_label('Repetir contraseña', 'Repetir_contraseña'),form_password('pass2'); ?> 
    <br />
    <br />
    <?php echo form_submit('submit', 'Registrar'); ?>
    <a href="<?php echo base_url('usuarios'); ?>" title="Iniciar Sesión"> Iniciar Sesión</a>
    <?php echo form_close(); ?>
    <br />
    <?php echo $errors; ?>
    <?php }?>
  </div>
</body>

</html>