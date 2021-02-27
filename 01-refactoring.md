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

4. you can't make a test DB class that return data for testing
- you can't test controller because you cant divide DB layer
- hard code query depend on special kind of database
- to use instance of DB class make difficult testing
- you lose all code refactoring this code

*****

## not good abstraction
### controller
```
<?php
class CustomersController {
  public function usersAction() {
    $repository = new CustomersRepository();
    $customers = $repository->getAll();
    return [
      'customers' => $customers
    ];
  }
}
?>
```

### view
```
<h2>Customers</h2>
<ul>
  <?php foreach($this->customers as $customer): ?>
    <li><?= $customer['name'] ?></li>
  <?php endforeach; ?>
</ul>
```

Good things
1. It is good to use DB model instance in controller
2. It is good to remove hard code query in controller
3. It is good to change nothing the controller changing DB class (CustomersRepository)

Bad things
1. controller still need CustomersRepository instance (solution is to use dependency injection concept)
2. you cant test usersAction method alone, require CustomersRepository class. usersAction depend on CustomersRepository


## good controller
```
class CustomersController extends AbstractActionController {
  protected $customerRepository;

  public function __construct(CustomerRepositoryInterface $repository) {
    $this -> $customerRepository = $repository;
  }

  public function indexAction() {
    return [
      'users' => $this -> customerRepository -> getAll();
    ];
  }
}

```

1. Using interface CustomerRepositoryInterface, It remove the dependency of CustomerRepository on controller, this controller do not depend on CustomerRepositoryInterface result.
2. You can make test data freely. Using CustomerRepositoryInterface implementation.
3. Library upgrade do not cause changing controller. CustomerRepositoryInterface and controller is independent.
