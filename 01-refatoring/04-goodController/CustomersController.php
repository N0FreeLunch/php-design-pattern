<?php
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

 ?>
