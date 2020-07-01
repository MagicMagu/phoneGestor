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
      <h2>Editar Contraseña</h2>
    </header>
    <form class="flex-columna" method="POST">
      <div class="flex">
        <label for="actual">Contraseña actual</label>
        <input type="text" name="actual" class="inputs" placeholder="Contraseña" required="true">
      </div>
      <div class="flex">
        <label for="new">Nueva</label>
        <input type="password" name="new" class="inputs" placeholder="Contraseña" required="true">
      </div>
      <div class="flex">
        <label for="vefiry">Confirmación</label>
        <input type="password" name="verify" class="inputs" placeholder="Contraseña" required="true">
      </div>
      <button type="submit" class="btn btn-load" name="changePass">Cambiar</button>
    </form>
  </div>
</body>
</html>