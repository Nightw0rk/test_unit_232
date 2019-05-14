<?php
namespace TU\Models;

class CCustomer
{
  // STATIC VAR
  private static $table_name = 'customer';
  //VAR
  /** @var Number */
  var $Id;
  /** @var String */
  var $Name;
  /** @var String */
  var $Surname;
  /** @var String */
  var $Address;
  /** @var String */
  var $Email;
  /** @var String */
  var $Telephone;
  /** @var Date */
  var $DateRegistration;
  /** @var CLoyalityCard */
  var $LoyalityCard;

  public function __construct($db = null)
  {
    $this->db = $db;
  }

  protected function loadLoyalityCard()
  { }

  public static function load($db, $id)
  {
    if ($id == null) return null;
    $customer = $db->fetchRow('select * from `' . CCustomer::$table_name . '` where `id`=:id ', ['id' => $id]);
  }

  public function save()
  {
    if ($this->Id == NULL) {
      $this->Id = $this->db->insert(
        CCustomer::$table_name,
        [
          'name' => $this->Name,
          'surname' => $this->Surname,
          'address' => $this->Address,
          'email' => $this->Email,
          'telephone' => $this->Telephone,
        ]
      );
    } else {
      $this->db->update(
        CCustomer::$table_name,
        ['id' => $this->Id],
        [
          'name' => $this->Name,
          'surname' => $this->Surname,
          'address' => $this->Address,
          'email' => $this->Email,
          'telephone' => $this->Telephone,
        ]
      );
    }
  }
}
