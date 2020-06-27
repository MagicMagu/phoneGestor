<?php 
  class connectDB{
    public static function connection(){
      //Conexión con la base de datos
      $conn = new mysqli('localhost', 'root', '', 'phonenumber');
      //Verificamos que no haya ningun problema
      if ($conn->connect_error) {
        die('Error de conexión (' . $conn->connect_errno . ') ' . $conn->connect_error);
      }

      return $conn;
    }
  }
?>