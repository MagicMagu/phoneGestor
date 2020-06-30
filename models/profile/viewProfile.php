<?php 
  class showProfile{
    private $database;
    public function __construct(){
      require_once('c:/xampp/htdocs/phoneGestor/models/db/connection.php');
      $this->database = connectDB::connection();
    }
    //Función para mostrar los datos del usuario
    public function viewUser($userId){
      //Variable que contendra los datos de nustro usuario
      $userData = null;
      //Verificamos que se ejecute una consulta
      if ($myUser = $this->database->query("SELECT * FROM users WHERE userId='$userId'")) {
        $userData = $myUser->fetch_assoc();
      }
      return $userData;
    }
  }
?>