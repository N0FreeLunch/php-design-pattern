<?php
include_once('CustomersController.php');
?>

<h2>Customers</h2>
<ul>
  <?php foreach ($this -> customers as $customer): ?>
    <li><?= $customer['name'] ?></li>
  <?php endforeach; ?>
</ul>
