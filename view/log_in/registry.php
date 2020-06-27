<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PhoneGestor</title>
</head>
<body>

  <?php if(!empty($message) && $message != 'Usuario creado satisfactoriamente'){ ?>
    <p><?php echo $message; ?></p>
  <?php } ?>

  <div class="contenedor">
    <header class="form-header">
      <h2>Registro</h2>
    </header>
    <form class="flex-columna" method="POST">
      <div class="flex">
        <label for="user">Usuario</label>
        <input type="text" name="user" class="inputs" placeholder="Usuario" required="true">
      </div>
      <div class="flex">
        <label for="email">Correo</label>
        <input type="email" name="email" class="inputs" placeholder="Correo" required="true">
      </div>
      <div class="flex">
        <label for="password">Contraseña</label>
        <input type="password" name="password" class="inputs" placeholder="Contraseña" required="true">
      </div>
      <button type="submit" class="btn btn-create" name="create">Crear Usuario</button>
    </form>
  </div>

</body>
</html>