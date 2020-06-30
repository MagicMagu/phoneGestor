<?php 
  class editProfile{
    private $database;
    public function __construct(){
      require_once('c:/xampp/htdocs/phoneGestor/models/db/connection.php');
      $this->database = connectDB::connection();
    }
    //Función para actualizar el perfil
    public function updateProfile($profileId, $name, $email){
      //Preparo la consulta
      $update = $this->database->prepare("UPDATE users SET user = '$name', email = '$email' WHERE userId='$profileId'");
      //Verificamos que se ejecute correctamente la consulta
      if ($update->execute()) {
        //Redirecionamos al usuario a la pagina de su perfil
        header("Location: ../../../../../phoneGestor/controller/profile/controllerProfile.php?id=$profileId");
      }else{
        //Si no lanzamos un mensaje de error
        echo 'Error al actualizar sus datos';
      }
    }
  }
?>