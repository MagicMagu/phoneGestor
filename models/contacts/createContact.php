<?php 
  class newContact{
    private $database;
    public function __construct(){
      //Cargo la clase con la conexión a la base de datos
      require_once('c:/xampp/htdocs/phoneGestor/models/db/connection.php');
      $this->database = connectDB::connection();
    }
    //Función para crear contactos
    public function createContact($name, $number, $userId){
      //Mensaje que retornara los mensajes de fracaso
      $message = '';
      //Consulta que creara el nuevo contacto
      $createCont = $this->database->prepare("INSERT INTO contact (name, phone, userId) VALUES ('$name', '$number', '$userId')");
      //Verificamos si se realizo la consulta
      if ($createCont->execute()) {
        //En caso de exito se redirecciona al usuario a la página de contactos
        header("Location: ../../../../../phoneGestor/controller/contacts/controllerContact.php?id=$userId");
      }else{
        $message = 'Error al crear el contacto';
      }
      return $message;
    }
  }
?>