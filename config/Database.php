<?php

  class Database {
    // DB Params
    private $host = 'localhost';
    private $port = '5432';
    private $db_name = 'MyBlog';
    private $username = 'postgres';
    private $password;
    private $conn;

    public function __construct() {
      $this->password = getenv('password');
    }

    // DB Connect
    public function connect() {
      $this->conn = null;
      $dsn = "pgsql:host={$this->host};port={$this->port}" .
      ";dbname={$this->db_name}";

      echo $this->password;
      try {
        $this->conn = new PDO($dsn, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }
      return $this->conn;
    }
  }

?>