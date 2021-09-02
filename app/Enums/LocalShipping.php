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
    const  shipping_in_1_day = 0;
    const  shipping_in_1_to_2 = 1;
    const  shipping_in_2_to_5 =2;
    const  shipping_in_2_to_9 = 3;
    const  shipping_in_1_to_10 = 4;
}   