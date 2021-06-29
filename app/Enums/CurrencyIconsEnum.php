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
    const USD =   '<i class="fas fa-dollar-sign"></i>';
    const EUR =   '<i class="fas fa-euro-sign"></i>';
    const CAD =   'C<i class="fas fa-dollar-sign"></i>';
    const GBP =   '<i class="fas fa-pound-sign"></i>';
}
