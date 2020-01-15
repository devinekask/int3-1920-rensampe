<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/WebshopDAO.php';
require_once __DIR__ . '/../dao/WebshopImageDAO.php';

class WebshopsController extends Controller {

  function __construct() {
    $this->webshopDAO = new WebshopDAO();
    $this->webshopImageDAO = new WebshopImageDAO();
  }

  public function index() {

    $products = $this->webshopDAO->selectAll();

    $this->set('products', $products);
    $this->set('title', "Webshop");
  }

  public function detail() {
    if(empty($_GET['id']) || !$product = $this->webshopDAO->selectById($_GET['id'])) {
      $_SESSION['error'] = 'Invalid Product';
      header('Location: index.php');
    }

    $productImages = $this->webshopImageDAO->selectByProductId($product['id']);

    $image = $productImages[0];
    if(!empty($_GET['image']) && $productImage = $this->webshopImageDAO->selectById($_GET['image'])) {
      $image = $productImage;
    }

    $this->set('product', $product);
    $this->set('productImages', $productImages);
    $this->set('title', "Detail");
  }

}
