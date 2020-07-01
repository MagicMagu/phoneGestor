<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../../phoneGestor/css/compile/main.css">
  <title>PhoneGestor</title>
</head>
<body>
  <div class="div">
    <header>
      <a href="<?php echo $routes['/index']?>">Inicio</a>
      <h2 class="text">Mi Perfil</h2>
    </header>
    <table>
      <thead>
        <tr>
          <th>Usuario</th>
          <th>Correo</th>
        </tr>
      </thead>
      <tbody>
        <td><?php echo $myData['user']; ?></td>
        <td><?php echo $myData['email']; ?></td>
      </tbody>
    </table>
    <div class="btn-group flex">
      <a href="<?php echo $routes['index/profile/editProfile']?>?id=<?php echo $myData['userId']?>" class="btn btn-edit">Editar Datos</a>
      <a href="<?php echo $routes['index/profile/editPassword']?>?id=<?php echo $myData['userId']?>" class="btn btn-pass">Editar Contraseña</a>
    </div>
  </div>
  <?php require_once('c:/xampp/htdocs/phoneGestor/includes/footer.php'); ?>
</body>
</html>