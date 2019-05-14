<?php
namespace TU\Models;

class CGood
{
    //STATIC
    public static $GOOD_UNIT_KG = 0;
    public static $GOOD_UNIT_M = 1;
    public static $GOOD_UNIT_PC = 2;
    //VAR
    /** @var Number */
    var $Id;
    /** @var String */
    var $Name;
    /** @var Number */
    var $Price;
    /** @var Number */
    var $Unit;
}
