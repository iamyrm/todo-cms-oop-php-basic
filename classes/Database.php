<?php

class Database
{
   private $hostname = DB_HOST;
   private $db_name = DB_NAME;
   private $db_user = DB_USER;
   private $db_password = DB_PASSWORD;

   private $conn;

   public function dbConnection()
   {
      $this->conn = null;

      $dsn = "mysql:host={$this->hostname};dbname={$this->db_name};charset=utf8mb4";

      try {
         $this->conn = new PDO($dsn, $this->db_user, $this->db_password);
         $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
         $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
         echo "Connected successfully to the database!";
      } catch (PDOException $e) {
         die("Connection failed: " . $e->getMessage());
      }

      return $this->conn;
   }
}
