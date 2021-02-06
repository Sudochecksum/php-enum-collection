<?php

namespace Sudochecksum\Enum;

use MyCLabs\Enum\Enum;

/**
 * @author Sudo Checksum
 * @link https://sudochecksum.github.io/php-enum-collection/
 * @license https://github.com/Sudochecksum/php-enum-collection/blob/main/LICENSE
 * @package sudochecksum/php-enum-collection
 * @category Enum
 * @method static SidebarEnum FULL()
 * @method static SidebarEnum SLIM()
 * @method static SidebarEnum NONE()
 */
class SidebarEnum extends Enum
{
    private const FULL = 'full';
    private const SLIM = 'slim';
    private const NONE = 'none';
}
