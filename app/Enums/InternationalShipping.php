<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class InternationalShipping extends Enum
{
    const business_days_6_to_25  = 0;
    const business_days_26_to_45 =   1;
}
