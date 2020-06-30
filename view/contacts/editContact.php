<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../../phoneGestor/css/compile/main.css">
  <title>PhoneGestor</title>
</head>
<body>
  <?php if(!empty($message)) {?>
    <p><?php echo $message; ?></p>
  <?php } ?>
  <div class="contenedor">
    <header class="form-header">
      <h2>Editar Contacto</h2>
    </header>
    <form class="flex-columna" method="POST">
      <div class="flex">
        <label for="contact">Nombre</label>
        <input type="text" name="contact" class="inputs" placeholder="Nombre contacto" required="true">
      </div>
      <div class="flex">
        <label for="phone">Número de telefono</label>
        <input type="tel" name="phone" class="inputs" placeholder="Número de telefono" required="true">
      </div>
      <button type="submit" class="btn btn-load" name="editcontact">Editar</button>
    </form>
  </div>
</body>
</html>