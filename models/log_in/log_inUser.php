<?php 
  class log_InModel extends connectDB{
    //Creamos la propiedad que almacenara la conexión
    private $database;
    public function __construct(){
      //Almacenamos la conexión en la variable privada
      $this->database = connectDB::connection();
    }
    //Creamos el metodo que verificara al usuario
    public function verifyUser($user, $password){
      //Variable que almacenara los mensajes de exito o fracaso
      $message = '';
      //Verificamos que se ejecute la consulta
      if ($userData = $this->database->query("SELECT user, password FROM users WHERE user='$user'")) {
        //Recojemos los campos retornados para verificar que la contraseña sea la misma proporcionada por el usuario
        $dbPassword = $userData->fetch_assoc();
        //Verificamos la contraseña del input con la de la base de datos
        if($dbPassword['user'] == ''){
          $message = 'Usuario inexistente';
        }else if(password_verify($password, $dbPassword['password'])){
          $message = 'Todo correcto';
        }else{
          $message = 'Contraseña incorrecta';
        }
      }else{
        $message = 'Lo sentimos, hemos tenido un problema intentalo más tarde';
      }
      //Retorno el mensaje que indica si todo esta bien o hay problemas
      return $message;
    }
  }
?>