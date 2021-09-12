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
    const  shipping_in_1_business_day = 0;
    const  shipping_in_1_to_2_business_day = 1;
    const  shipping_in_2_to_5_business_day =2;
    const  shipping_in_2_to_9_business_day = 3;
    const  shipping_in_1_to_10_business_day = 4;
}   