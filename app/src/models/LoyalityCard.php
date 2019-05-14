<?php

namespace TU\Models;


class CLoyalityCard
{
    // STATIC
    public static $CARD_BASIC = 1;
    public static $CARD_TEMPORARY = 0;
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
     * @return \Custmer
     */
    private function getCustomer()
    { }
}
