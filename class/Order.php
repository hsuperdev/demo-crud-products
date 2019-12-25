<?php
  class Order
  {
    protected $id;
    protected $orderDate;
    protected $status;
    protected $customerId;
    protected $customerName;

    public function __construct($id, $orderDate, $status, $customerId, $customerName) {
      $this->id = $id;
      $this->orderDate = $orderDate;
      $this->status = $status;
      $this->customerId = $customerId;
      $this->customerName = $customerName;
    }

    public function getId() {
      return $this->id;
    }

    public function getCustomerId() {
      return $this->customerId;
    }

    public function getStatus() {
      return $this->status;
    }

    public function getOrderDate() {
      return $this->orderDate;
    }

  }
?>
