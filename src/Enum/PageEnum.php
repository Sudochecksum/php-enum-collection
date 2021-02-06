<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static PageEnum FULL_SLIDER()
 * @method static PageEnum OVERVIEW()
 * @method static PageEnum SINGLE_VIDEO()
 * @method static PageEnum SINGLE_GALLERY()
 * @method static PageEnum SINGLE_AUDIO()
 * @method static PageEnum ABOUT()
 * @method static PageEnum CONTACT()
 * @method static PageEnum HELP()
 * @method static PageEnum LOGIN()
 * @method static PageEnum REGISTER()
 * @method static PageEnum ERROR()
 */
class PageEnum extends Enum
{
    public const FULL_SLIDER = 'full-slider';
    public const OVERVIEW = 'overview';
    public const SINGLE_VIDEO = 'single-video';
    public const SINGLE_GALLERY = 'single-gallery';
    public const SINGLE_AUDIO = 'single-audio';
    public const ABOUT = 'about';
    public const CONTACT = 'contact';
    public const HELP = 'help';
    public const LOGIN = 'login';
    public const REGISTER = 'register';
    public const ERROR = 'error';
}
