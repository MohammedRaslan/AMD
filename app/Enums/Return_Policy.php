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
    const In_14_DaysFreeReturns =   1;
    const In_14_DaysBuyerPaysForReturn = 2;
    const In_30_DaysFreeReturns = 3;
    const In_30_DaysBuyerPaysForReturn = 4;
}
