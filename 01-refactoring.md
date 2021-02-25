# refactoring

## bad architecture
```
<body>
  <?php $results = mysql_query(
    'SELECT * FROM customers ORDER BY name'
  ); ?>
  <h2>Customers</h2>
  <ul>
    <?php while($customer = mysql_fetch_assoc($results)): ?>
    <li><?php $customer['name'] ?></li>
    <?php endwhile; ?>
  </ul>
</body>
```

1. using an old function, security vulnerable function => can't version up
```
mysql_fetch_assoc
```

2. using one layer (Monolithic style) => connection db + loop + html tag

3. terrible refactoring

4. cant testing

5. to understand flow so slow

*****

## devide view and controller
### controller
```
class CustomersController {
  public function indexAction () {
    $db = Db::getInstance();

    $customers = $db->fetchAll('SELECT * FROM customer ORDER BY name');

    return [
      'customers' => $customers
    ];
  }
}
```

### view
```
<h2>Customers</h2>
<ul>
  <?php foreach ($this -> customers as $customer): ?>
    <li><?= $customer['name'] ?></li>
  <?php endforeach; ?>
</ul>
```
1. hard coded query

2. using an old DB layer : to change new DB layer => so many code modifying needed

3. too difficult testing : to test indexAction() function require DB connection

4. you cant make a test DB class return data list for testing
*****

## bad architecture
```
<h2>Customers</h2>
<ul>
  <?php while($customer = mysql_fetch_assoc($result)): ?>
  <li><?= $customer['name'] ?></li>
  <?php endwhile; ?>
</ul>
```
