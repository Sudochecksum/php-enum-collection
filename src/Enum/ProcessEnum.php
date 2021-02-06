<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static ProcessEnum ENABLED()
 * @method static ProcessEnum DISABLED()
 */
class ProcessEnum extends Enum
{
    public const ENABLED = 'enabled';
    public const DISABLED = 'disabled';
}
