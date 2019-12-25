<?php
  class DBConnect
  {
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct($dsn, $username, $password) {
      $this->dsn = $dsn;
      $this->username = $username;
      $this->password = $password;
    }

    public function connect() {
      $conn = null;
      try {
        $conn = new PDO('mysql:host=localhost;dbname=classicmodels', $username, $password);
        echo "Ket noi thanh cong";
      } catch (\Exception $e) {
        return $e->getMessage();
      }

      return $conn;
    }
  }
?>
