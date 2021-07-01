<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class LocalShipping extends Enum
{
    const  business_day_1 = 0;
    const  business_days_1_to_2 = 1;
    const  business_days_2_to_5 = 2;
    const  business_days_2_to_9 = 3;
    const  business_days_1_to_10 = 4;
}   