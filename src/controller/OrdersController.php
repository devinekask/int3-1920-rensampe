<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/WebshopDAO.php';

class OrdersController extends Controller {

  private $webshopDAO;

  function __construct() {
    $this->webshopDAO = new WebshopDAO();
  }

  public function cart() {


  }

}
