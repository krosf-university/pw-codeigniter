<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articulos</title>
</head>

<body>
  <div style="height:100vh;display:flex;justify-content:center;align-items:center;flex-direction:column;">
  <a href="<?php echo base_url('articulos'); ?>" title="Articulos">Articulos</a>
<h1> Insertar artículo </h1>
<?php
echo form_open(base_url('formulario'), ['name' => 'mi_form', 'id' => 'form']);
echo form_label('Titulo', 'Titulo', ['class' => 'label']);
echo form_input('titulo', '', 'class="input"'); ?> <br />
<br />
<?php echo form_label('Descripción', 'Descripción', ['class' => 'label']); ?>
<br/>
<?php echo form_textarea('descripcion', '', 'class="textarea" row="25px"'); ?>
<br />
<br />
<?php echo form_label('Cuerpo', 'Cuerpo', ['class' => 'label']); ?>
<br /> <?php echo form_textarea('cuerpo', '', 'class="textarea" row="50px"'); ?>
<br />
<?php echo form_submit('submit', 'Enviar datos', 'class="submit"');
 echo form_close(); ?>
<br />
<h3>Posibles errores</h3> 
<?php echo $errors; ?>
</div>
</body>

</html>