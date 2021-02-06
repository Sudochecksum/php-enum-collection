<?php

namespace Sudochecksum\Enum;

use MyCLabs\Enum\Enum;

/**
 * @author Sudo Checksum
 * @link https://sudochecksum.github.io/php-enum-collection/
 * @license https://github.com/Sudochecksum/php-enum-collection/blob/main/LICENSE
 * @package sudochecksum/php-enum-collection
 * @category Enum
 *
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
