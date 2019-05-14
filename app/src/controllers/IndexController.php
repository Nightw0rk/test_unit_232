<?php
namespace TU\Controller;

use TU\Models\CLoyalityCard;
use TU\Models\CCustomer;

include(__DIR__ . "/../shared/AController.php");
include(__DIR__ . "/../models/Customer.php");
include(__DIR__ . "/../models/LoyalityCard.php");


class IndexController extends \TU\Shared\AController
{
  // public function action($name, $method, $params)
  // {
  //   echo $this->draw_index();
  // }
  function get_index($params = NULL)
  {
    echo $this->render->render('index.html');
  }

  function get_registration($params = NULL)
  {
    echo $this->render->render('registration.html');
  }

  function post_registration($params = NULL)
  {
    $errors = array();
    $card = null;
    if (strlen($params['name']) < 3) {
      array_push($errors, ['name' => 'Name', 'message' => 'Name must be great than 3 symbol']);
    }
    if (strlen($params['surname']) < 3) {
      array_push($errors, ['name' => 'Surname', 'message' => 'Surname must be great than 3 symbol']);
    }
    if (strlen($params['address']) < 10) {
      array_push($errors, ['name' => 'Address', 'message' => 'Address must be great than 10 symbol']);
    }
    if (strlen($params['email']) < 4) {
      array_push($errors, ['name' => 'Email', 'message' => 'Address must be great than 4 symbol']);
    }
    if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $params['email'])) {
      array_push($errors, ['name' => 'Email', 'message' => 'Email field has invalid format for electronic mail']);
    }
    if (strlen($params['card']) > 0) {
      $card = CLoyalityCard::findCardByNumber($this->db, $params['card']);
      if ($card == null) {
        array_push($errors, ['name' => 'Loyality Card', 'message' => 'Please check loyality card number']);
      }
    }
    if (count($errors) > 0) {
      echo $this->render->render('registration_failed.html', ['errors' => $errors]);
    } else {
      $customer = new CCustomer($this->db);
      $customer->Name = $params['name'];
      $customer->Surname = $params['surname'];
      $customer->Address = $params['address'];
      $customer->Email = $params['email'];
      $customer->Telephone = $params['telephone'];
      $customer->save();
      if ($card != NULL) {
        $card->Customer = $customer;
        $card->save();
       }

      echo $this->render->render('registration_success.html', $params);
    }
  }
}
