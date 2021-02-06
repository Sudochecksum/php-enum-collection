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
 * @method static ProcessEnum ENABLED()
 * @method static ProcessEnum DISABLED()
 */
class ProcessEnum extends Enum
{
    public const ENABLED = 'enabled';
    public const DISABLED = 'disabled';
}
