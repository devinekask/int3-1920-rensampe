<?php

require_once __DIR__ . '/DAO.php';

class WebshopDAO extends DAO {

  public function selectAll() {
    $sql = "
      SELECT `products`.*, MIN(`product_images`.`image`) AS `image` FROM `products`
      RIGHT JOIN `product_images` ON `products`.`id` = `product_images`.`product_id`
      GROUP BY `products`.`id` ORDER BY `title` ASC
    ";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id) {
    $sql = "
      SELECT `products`.*, MIN(`product_images`.`image`) AS `image` FROM `products`
      RIGHT JOIN `product_images` ON `products`.`id` = `product_images`.`product_id`
      WHERE `products`.`id` = :id
      GROUP BY `products`.`id`
    ";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectProductByTitle($title){
    $sql = "SELECT * FROM `products` WHERE `title` LIKE :title ORDER BY `title` LIMIT 100";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':title', '%' . $title . '%');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectProductByType($type){
    $sql = "SELECT * FROM `products` WHERE `type` LIKE :type ORDER BY `type` LIMIT 100";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':type', $type);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insertOrder($data){
    $errors = $this->validate($data);
    if(empty($errors)){
      $sql = "INSERT INTO `orders` (`product_id`,`fname`,`lname`) VALUES(:product_id,:fname,:lname)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':product_id',$data['product_id']);
      $stmt->bindValue(':fname',$data['fname']);
      $stmt->bindValue(':lname',$data['lname']);
      return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    return false;
  }

  // validate
  public function validate($data){
    $errors = [];
    if (empty($data['fname'])) {
      $errors['fname'] = 'The description is required';
    }
    return $errors;
  }
}
