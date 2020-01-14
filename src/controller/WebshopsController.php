<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/WebshopDAO.php';

class WebshopsController extends Controller {

  function __construct() {
    $this->webshopDAO = new WebshopDAO();
  }

  public function index() {

    $this->set('title', "Webshop");

  }

}
