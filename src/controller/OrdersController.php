<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/WebshopDAO.php';

class OrdersController extends Controller {

  private $webshopDAO;

  function __construct() {
    $this->webshopDAO = new WebshopDAO();
  }

  public function cart() {
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'add') {
        $this->_handleAdd();
        header('Location: index.php?page=detail&id=' . $_POST['id']);
        exit();
      }
      if ($_POST['action'] == 'empty') {
        $_SESSION['cart'] = array();
      }
      if ($_POST['action'] == 'update') {
        $this->_handleUpdate();
      }
      header('Location: index.php?page=cart');
      exit();
    }

    if (!empty($_POST['remove'])) {
      $this->_handleRemove();
      header('Location: index.php?page=cart');
      exit();
    }

    if(!empty($_POST['code'])) {
      header('Location: index.php?page=cart&code=' . $_POST['code']);
      exit();
    }

    $this->set('title', "Winkelwagen");
  }

  private function _handleCheckout() {
    if(!empty($_SESSION['cart'])){
      unset($_SESSION['cart']);
    }

    header('Location: index.php?page=confirmation');
    exit();
  }

  private function _handleAdd() {
    if (empty($_SESSION['cart'][$_POST['product_id']])) {
      $product = $this->webshopDAO->selectById($_POST['product_id']);
      if (empty($product)) {
        return;
      }
      $_SESSION['cart'][$_POST['product_id']] = array(
        'product' => $product,
        'quantity' => 0
      );
    }
    $_SESSION['cart'][$_POST['product_id']]['quantity']++;
  }
  private function _handleRemove() {
    if (isset($_SESSION['cart'][$_POST['remove']])) {
      unset($_SESSION['cart'][$_POST['remove']]);
    }
  }
  private function _handleUpdate() {
    foreach ($_POST['quantity'] as $productId => $quantity) {
      if (!empty($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] = $quantity;
      }
    }
    $this->_removeWhereQuantityIsZero();
  }
  private function _removeWhereQuantityIsZero() {
    foreach($_SESSION['cart'] as $productId => $info) {
      if ($info['quantity'] <= 0) {
        unset($_SESSION['cart'][$productId]);
      }
    }
  }

  public function information() {
  //toevoegen aan database
    if(isset($_POST['information'])) {
      $first_name = $_POST['fname'];
      $last_email = $_POST['lname'];
      $email = $_POST['email'];
      $street = $_POST['street'];
      $number = $_POST['number'];
      $bus = $_POST['bus'];
      $place = $_POST['place'];

      header("Location: index.php?page=payment");
      exit;
    }


    $this->set('title', "Jouw gegevens");

  }

  public function payment() {
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'handleCheckout') {
        $this->_handleCheckout();
      }
    }

    $this->set('title', "Betaalwijze");
  }

  public function confirmation() {
    $this->set('title', "Bevestiging");
  }
}

