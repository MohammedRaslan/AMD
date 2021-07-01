<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Return_Policy extends Enum
{
    const NoReturns =   0;
    const DaysFreeReturns_14 =   1;
    const DaysBuyerPaysForReturn_14 = 2;
    const DaysFreeReturns_30 = 3;
    const DaysBuyerPaysForReturn_30 = 4;
}
