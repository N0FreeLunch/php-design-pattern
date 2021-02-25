<?php
class CustomersController {
  public function indexAction () {
    $db = Db::getInstance();

    $customers = $db->fetchAll('SELECT * FROM customer ORDER BY name');

    return [
      'customers' => $customers
    ];
  }
}
 ?>
