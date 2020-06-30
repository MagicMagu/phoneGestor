<?php 
  class editCon{
    private $database;
    public function __construct(){
      require_once("c:/xampp/htdocs/phoneGestor/models/db/connection.php");
      $this->database = connectDB::connection();
    }
    //Función para actualizar los datos
    public function updateContact($contactId, $name, $number, $userSess){
      //Variable que contendra los mensajes de exito o fracaso
      $message = '';
      $update = $this->database->prepare("UPDATE contact SET name = '$name', phone = '$number' WHERE contactId='$contactId'");
      if ($update->execute()) {
        //Redirijimos al usuario a la pagina de contactos
        header("Location: ../../../phoneGestor/controller/contacts/controllerContact.php?id=$userSess");
      }else{
        $message = 'Error al actualizar los datos';
      }
      return $message;
    }
  }
?>