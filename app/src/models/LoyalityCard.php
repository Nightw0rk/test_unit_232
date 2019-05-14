<?php

namespace TU\Models;


class CLoyalityCard
{
  // STATIC
  public static $CARD_BASIC = 0;
  public static $CARD_TEMPORARY = 1;
  private static $table_name = 'loyality_card';
  // VAR PUBLIC
  /** @var Number */
  var $Id;
  /** @var Number */
  var $Number;
  /** @var Number */
  var $Type;
  /** @var CCustomer */
  var $Customer;
  /**
   * @var Simplon\Mysql\Mysql
   */
  private $db;

  public function __construct($db = null)
  {
    $this->db = $db;
  }

  /**
   * @return \Custmer
   */
  private function getCustomer()
  { }

  /**
   * @return CLoyalityCard
   */
  public static function findCardByNumber($db, $number)
  {
    $card = $db->fetchRow(
      'select * from `' . CLoyalityCard::$table_name . '` where `number`=:n and `customer_id` is NULL',
      [
        'n' => $number,
      ]
    );
    if($card == NULL) return NULL;
    $objCard = new CLoyalityCard();
    $objCard->Id = $card["id"];
    $objCard->Number = $card["number"];
    $objCard->Type = $card["type"];
    $objCard->db = $db;
    $objCard->Customer = CCustomer::load($db, $card["customer_id"]);
    return $objCard;
  }

  public function save()
  {
    $cid = null;
    if ($this->Customer != NULL) {
      $cid = $this->Customer->Id;
    }
    if ($this->Id == NULL) {
      $this->Id = $this->db->insert(
        CLoyalityCard::$table_name,
        [
          'number' => $this->Number,
          'type' => $this->Type,
          'customer_id' => $cid
        ]
      );
    } else {
      $this->db->update(
        CLoyalityCard::$table_name,
        ['id' => $this->Id],
        [
          'number' => $this->Number,
          'type' => $this->Type,
          'customer_id' => $cid
        ]
      );
    }
  }
}
