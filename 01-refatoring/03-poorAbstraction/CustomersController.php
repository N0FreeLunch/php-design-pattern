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
