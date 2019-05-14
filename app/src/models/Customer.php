<?php
namespace TU\Models;

class CCustomer
{
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

    protected function loadLoyalityCard()
    { }
}
