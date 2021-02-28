## Factory class
```
class CustomerFactory {
  protected $accountManagerRepo;
  public function __construct(AccountManagerRepository $repo) {
    $this -> accountManagerRepo = $repo;
  }

  public function createCustomer($name) {
    $customer = new Customer();
    $customer -> setName($name);
    $customer -> setCreditLimit(0);
    $customer -> setStatus('pending');
    $customer -> setAccountManager(
      $this -> accountManagerRepo -> getRandom()
    );
    return $customer;
  }
}
```
1. reusable
2. testable
3. easily changing

### usage
```
$customer = new Customer();
```

## Static Factoryies
static factory is made static method only
```
class CustomerFactory {
  public static function createCustomer($name) {
    $customer -> setName($name);
    $customer -> setCreditLimit(0);
    $customer -> setStatus('pending');

    return $customer;
  }
}
```

### usage
```
$customer = CustomerFactory::createCustomer('ACME Corp');
```
1. Without instance, It is simple to use method
2. Don't use static factory in case of outer class dependency

## simple factory (Factory method)
making new page
```
class Document {
  public function createPage () {
    return new Page();
  }
}
```

##
making each other page
```
abstract class AbstractDocument {
  public function render () {
    $this->addPage(1, $this -> createPage());
  }

  public function addPage(1, AbstractPage) {

  }

  abstract public function createPage();
}
```
- render method use addPage method and createPage method

##

```
class ResumeDocument extends AbstractDocument {
  public function createPage() {
    return new ResumePage();
  }
}
```
