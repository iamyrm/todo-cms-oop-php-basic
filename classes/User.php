<?php

class User
{
   private $conn;
   private $table = "users";

   public function __construct()
   {
      $database = new Database();
      $this->conn = $database->dbConnection();
   }

   public function register($username, $email, $password)
   {
      $query = "INSERT INTO " . $this->table . " (username,email,password) VALUES (:username, :email, :password)";
      $stmt = $this->conn->prepare($query);
      $hashed_password = password_hash($password, PASSWORD_BCRYPT);

      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':password', $hashed_password);

      if($stmt->execute()){
         return true;
      }
      return false;
   }
}
