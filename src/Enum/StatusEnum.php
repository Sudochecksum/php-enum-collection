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
 * @method static StatusEnum ACTIVE()
 * @method static StatusEnum INACTIVE()
 */
class StatusEnum extends Enum
{
    public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';
}
