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
    /** 
     *  1 open (
     *  2 close )
     *  3 ,
     * */
    const ANY= 7;
    const New_1_Original_NRFB_3_Never_removed_from_box_2 = 0;
    const New_1_Open_box_2 = 1;
    const Like_New_1_Good_condition_with_or_without_Box_2 = 2;
    const Used = 3;
    const Damaged = 4;
    const Used_OOAK_1_One_of_a_kind_2 = 5;
    const Like_new_OOAK_1_One_of_a_kind_2 =6;
}
