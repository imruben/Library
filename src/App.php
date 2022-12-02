<?php

namespace App;

use App\Request;

final class App
{
  //public Router $router;
  public Request $request;
  public function __construct()
  {
    $this->request = new Request();
    $controller = $this->request->getController();
    $action = $this->request->getAction();
    // var_dump($controller);
    // var_dump($action);
    $this->dispatch($controller);
  }
  public function dispatch($controller)
  {
    try {
      //comprovar si tenim el controlador
      $nameController = '\\App\Controllers\\' . ucfirst($controller) . 'Controller';
      //die($nameController);
      $objContr = new $nameController;
      // var_dump($objContr);
      $action = $this->request->getAction();

      if (method_exists($objContr, $action)) {
        call_user_func([$objContr, $action]);
      } else {
        call_user_func([$objContr . 'error']);
      }
    } catch (\Exception $e) {
      die($e->getMessage());
    }
  }
}
