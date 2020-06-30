<?php 
  //Solicitamos la conexión
  require_once('c:/xampp/htdocs/phoneGestor/models/db/connection.php');
  $conId = $_GET['id'];
  $useId = $_GET['userId'];
  $dbConn = connectDB::connection();
  //Realizamos la consulta
  $delete = $dbConn->prepare("DELETE FROM contact WHERE contactId='$conId'");
  //Verificamos que la consulta sea exitosa
  if ($delete->execute()) {
    //Redirijimos a la página de contactos
    header("Location: ../../../../../phoneGestor/controller/contacts/controllerContact.php?id=$useId");
  }else{
    echo "Error al eliminar el contacto";
  }
?>