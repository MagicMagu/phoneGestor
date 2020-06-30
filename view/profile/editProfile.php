<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../../phoneGestor/css/compile/main.css">
  <title>Document</title>
</head>
<body>
  <div class="contenedor">
    <header class="form-header">
      <h2>Editar Contacto</h2>
    </header>
    <form class="flex-columna" method="POST">
      <div class="flex">
        <label for="user">Usuario</label>
        <input type="text" name="user" class="inputs" placeholder="Usuario" required="true">
      </div>
      <div class="flex">
        <label for="mail">Correo</label>
        <input type="email" name="mail" class="inputs" placeholder="Correo" required="true">
      </div>
      <button type="submit" class="btn btn-load" name="edituser">Editar</button>
    </form>
  </div>
</body>
</html>