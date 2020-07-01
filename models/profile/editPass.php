<?php 
  class editMyPass{
    private $database;
    public function __construct(){
      require_once('c:/xampp/htdocs/phoneGestor/models/db/connection.php');
      $this->database = connectDB::connection();
    }
    //Función para verificar la contraseña
    private function verifyPass($actual, $userId){
      //Verificamos que se ejecute la consulta
      if ($verify = $this->database->query("SELECT password FROM users WHERE userId='$userId'")) {
        $myActualPass = $verify->fetch_assoc();
        //Verificamos que el password sea el mismo
        if ($pass = password_verify($actual, $myActualPass['password'])) {
          return $pass;
        }else{
          return $pass;
        }
      }
    }
    //Función para actualizar la contraseña
    public function updatePass($actual, $change, $userId){
      //Verificamos que la contraseña actual sea igual a la de la base de datos
      if ($verification = $this->verifyPass($actual, $userId)) {
        $encryptPass = password_hash($change, PASSWORD_BCRYPT);
        //Preparamos la consulta para actualizar la contraseña
        $update = $this->database->prepare("UPDATE users SET password = '$encryptPass' WHERE userId='$userId'");
        //Verificamos que se actualize la contraseña
        if ($update->execute()) {
          //Redireccionamos al usuario a la página de perfil
          header("Location: ../../../../../phoneGestor/controller/profile/controllerProfile.php?id=$userId");
        }else{
          echo 'Error al actualizar la contraseña';
        }
      }else{
        echo "Las contraseñas no son iguales";
      }
    }
  }
?>