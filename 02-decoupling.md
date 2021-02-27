## spaghetti coupling
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
1. to use this code requiring database
2. You can not reuse any code unit independently
3. this code can not test without browser


## OOP coupling
```
class UsersController {
  public function indexAction() {
    $repo = new UserRepository();
    $users = $repo -> getAll();
    return $users;
  }
}
```
1. You can't use UsersController class without UserRepository class
