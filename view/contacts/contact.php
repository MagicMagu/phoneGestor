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
      <a href="<?php echo $routes['/index']?>" class="btn btn-back">inicio</a>
      <h2 class="text">Mis Contactos</h2>
    </header>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Telefóno</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php if($myContacts == null) {?>
          <p>No has creado contactos</p>
        <?php }else{ ?>
          <?php foreach($myContacts as $myContact) {?>
            <tr>
              <td><?php echo $myContact['contactId']; ?></td>
              <td><?php echo $myContact['name']; ?></td>
              <td><?php echo $myContact['phone']; ?></td>
              <td>
                <a href="<?php echo $routes['index/contact/editContact']?>?id=<?php echo $myContact['contactId']?>&userId=<?php echo $myContact['userId']?>" class="btn btn-edit">Editar</a>
              </td>
              <td>
                <a href="<?php echo $routes['index/contact/deleteContact']?>?id=<?php echo $myContact['contactId']?>&userId=<?php echo $myContact['userId']?>" class="btn btn-delete">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
        <?php } ?>
      </tbody>
    </table>
    <a href="<?php echo $routes['index/contact/createContact']; ?>?id=<?php echo $session; ?>" class="btn btn-create">Crear Contacto</a>
  </div>
  <?php include_once('c:/xampp/htdocs/phoneGestor/includes/footer.php'); ?>
</body>
</html>