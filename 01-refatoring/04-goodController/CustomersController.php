<?php
class CustomersController extends AbstractActionController {
  protected $customerRepository;

  public function __construct($customerRepositoryInterface $repository) {
    $this -> $customerRepository = $repository;
  }

  public function indexAction() {
    return [
      'users' => $this -> customerRepository -> getAll();
    ];
  }
}

 ?>
