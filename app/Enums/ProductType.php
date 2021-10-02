<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ProductType extends Enum
{
    const Regular = 0;
    const Bidding = 1;
    const Requested = 2;
    const OFFER = 3;
}   
