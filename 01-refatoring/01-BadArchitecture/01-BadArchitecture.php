<h2>Customers</h2>
<ul>
  <?php while($customer = mysql_fetch_assoc($result)); ?>
  <li><?= $customer['name'] ?></li>
  <?php endwhile; ?>
</ul>
