<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static ContinentEnum AFRICA()
 * @method static ContinentEnum AFRO_EURASIA()
 *
 * @method static ContinentEnum EURASIA()
 * @method static ContinentEnum ASIA()
 * @method static ContinentEnum EUROPE()
 *
 * @method static ContinentEnum AUSTRALIA()
 * @method static ContinentEnum ANTARCTICA()
 *
 * @method static ContinentEnum AMERICA()
 * @method static ContinentEnum NORTH_AMERICA()
 * @method static ContinentEnum SOUTH_AMERICA()
 */
class ContinentEnum extends Enum
{
    public const AFRICA = 'africa';
    public const AFRO_EURASIA = 'afro eurasia';
    public const EURASIA = 'eurasia';
    public const ASIA = 'asia';
    public const EUROPE = 'europe';
    public const AUSTRALIA = 'australia';
    public const ANTARCTICA = 'antarctica';
    public const AMERICA = 'america';
    public const NORTH_AMERICA = 'north america';
    public const SOUTH_AMERICA = 'south america';
}
