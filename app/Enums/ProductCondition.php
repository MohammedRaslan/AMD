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
    const New_original_never_removed_from_box = 0;
    const New_open_box = 1;
    const Like_new_good_condition_with_or_without_box = 2;
    const Used = 3;
    const Damaged = 4;
    const OOAK_used = 5;
    const OOAK_like_new =6;
}
