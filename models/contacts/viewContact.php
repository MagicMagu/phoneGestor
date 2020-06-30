<?php 
  class myContact{
    private $database;
    public function __construct(){
      //Requirimos la conexión a la base de datos
      require_once('c:/xampp/htdocs/phoneGestor/models/db/connection.php');
      $this->database = connectDB::connection();
    }
    //Función para mostrar los usuarios creados
    public function showUsers($userId){
      //Variable que contendrar los resultados de la consulta
      $contactsData = '';
      if ($userId != '') {
        if($userContacts = $this->database->query("SELECT * FROM contact WHERE userId='$userId'")){
          $contactsData = $userContacts->fetch_all(MYSQLI_ASSOC);
        }else{
          $contactsData = null;
        }
      }
      //Retornamos la variable con o sin resultados
      return $contactsData;
    }
  }
?>