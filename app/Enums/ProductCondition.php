<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ProductCondition extends Enum
{
    const new =  'New ';
    const modified =   'something Modified ';
}
