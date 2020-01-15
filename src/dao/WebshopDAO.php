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

}
