<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CurrencyIconsEnum extends Enum
{
    const USD = '&#36';
    const EUR = '&#8364';
    const CAD = 'CA$';
    const GBP = '&#163';
}
