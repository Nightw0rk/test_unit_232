<?php

namespace TU\Models;

class CCustomerPurchases
{

    /** @var Number */
    var $Id;
    /** @var Number */
    var $TotalPrice;
    /** @var Date */
    var $PurchaseDate;
    /** @var CLoyalityCard */
    var $LoyalityCard;
    /** @var CCustomer */
    var $Customer;
    /** @var CGoods[] */
    var $Goods = array();

    protected function loadLoylityCard()
    { }
    protected function loadCustomer()
    { }
    protected function loadListOfGoods()
    { }
}
