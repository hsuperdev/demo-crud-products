<?php
  class OrderManager
  {
    protected $orderDB;

    public function __construct(){
      $connect = new DBConnect("mysql:host=localhost;dbname=classicmodels", "root", "@Hoantn123");
      $this->orderDB = new OrderDB($connect->connect());
    }
  }
?>
