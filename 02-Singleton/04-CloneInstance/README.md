## self 키워드를 사용해서 객체 생성하기
- 객체는 클래스를 통해 만들어진다.
- 클래스에서 `self`는 클래스 자신을 가리킨다. 따라서 `new self()`라고 하면 클래스를 통해 객체를 생성한다는 코드이다.

## 클래스 내에서 객체를 생성하는 메소드
```php
  public static function getInstance()
  {
    return new self();
  }
```

## 코드 해석
```
$obj1 = Config::getInstance();
```
- 객체를 생성하는데 있어서 `getInstance` 메소드가 먼저 실행이 되고, `getInstance` 메소드 내부의 객체를 생성하는 코드가 실행 되므로 생성자가 `getInstance`의 실행시점 이후의 실행 시점을 갖는다.
- 따라서 `オブジェクトを生成します。` 표현이 `が生成されました。` 표현보다 앞서게 된다.

```
$obj2 = Config::getInstance();
```
- 객체를 생성하는 코드를 가진 `getInstance` 메소드를 다시 호출했을 때 새로운 객체가 생성되므로 현 단계는 아직 싱글톤 패턴을 갖지 못한 코드이다.

```
$obj3 = new Config();
$obj3->getInstance();
```
- `new` 키워드로 인스턴스를 생성하면 생성자를 호출하게 되는데 생성자의 접근 제한자가 private로 호출할 수 없는 상태이므로 에러를 발생시킨다.
