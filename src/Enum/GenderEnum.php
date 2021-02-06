<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static GenderEnum MALE()
 * @method static GenderEnum FEMALE()
 * @method static GenderEnum UNKNOWN()
 */
class GenderEnum extends Enum
{
    public const MALE = 'male';
    public const FEMALE = 'female';
    public const UNKNOWN = 'unknown';

}
