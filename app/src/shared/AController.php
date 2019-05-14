<?php

namespace TU\Shared;

require __DIR__ . "/IController.php";
require __DIR__ . "/../../vendor/autoload.php";

abstract class AController implements IController
{
  var $render;
  var $db;

  public function __construct($db = null)
  {
    $this->db = $db;
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../views'); //\Twig\Loader\FilesystemLoader('/path/to/templates');
    $this->render = new \Twig\Environment($loader);
  }

  public function action($name, $method, $params)
  {
    
    if (method_exists(get_called_class(), $method . '_' . $name)) {
      if($method == 'POST' && $params == null){
        $params = $_POST;
      }
      $this->{$method . '_' . $name}($params);
    } else {
      echo "Not Found";
    }
  }
}
