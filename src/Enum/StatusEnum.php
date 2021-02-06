<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static StatusEnum ACTIVE()
 * @method static StatusEnum INACTIVE()
 */
class StatusEnum extends Enum
{
    public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';
}
