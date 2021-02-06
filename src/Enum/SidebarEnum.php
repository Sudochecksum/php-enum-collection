<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
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
