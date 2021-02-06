<?php

namespace App\Enum;

namespace Sudochecksum\Enum;

/**
 * @author Sudo Checksum
 * @link https://sudochecksum.github.io/php-enum-collection/
 * @license https://github.com/Sudochecksum/php-enum-collection/blob/main/LICENSE
 * @package sudochecksum/php-enum-collection
 * @category Enum
 *
 * @method static VideoQualityEnum FULL_HD()
 * @method static VideoQualityEnum SD()
 *
 * @method static VideoQualityEnum _8K()
 * @method static VideoQualityEnum _4k()
 * @method static VideoQualityEnum _720p()
 * @method static VideoQualityEnum _480p()
 * @method static VideoQualityEnum _320p()
 */
class VideoQualityEnum extends Enum
{
    public const FULL_HD = 'full hd';
    public const SD = 'sd';

    public const _8K = '8k';
    public const _4k = '4k';
    public const _1080p = '1080p';
    public const _720p = '720p';
    public const _480p = '480p';
    public const _320p = '320';

}
