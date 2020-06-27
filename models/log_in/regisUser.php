<?php 
  class registModel extends connectDB{
    //Declaro la variable que almacenara la conexión de forma privada
    private $database;
    public function __construct(){
      $this->database = connectDB::connection();
    }
    //Creo el nuevo metodo publico para crear nuevos usuarios
    public function insert_user($user, $password, $email){
      //Creo una variable que me almacenara los mensajes para mostrar al usuario
      $message = '';
      //Encriptamos la contraseña
      $securePass = password_hash($password, PASSWORD_BCRYPT);
      //Creo la consulta y la almaceno en la variable insert
      $insert = $this->database->prepare("INSERT INTO users (user, password, email) VALUES ('$user', '$securePass', '$email')");
      //Verifico lo que devuelve la consulta
      if ($insert->execute()) {
        $message = 'Usuario creado satisfactoriamente';
      }else{
        $message = 'Lo sentimos a ocurrido un error al intentar crear el usuario';
      }
      return $message;
    }
  }
?>