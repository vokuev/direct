<?php

namespace direct\api\enums\ad;

use direct\api\Enum;

/**
 * @method static MobileAdFieldEnum Title()
 * @method static MobileAdFieldEnum Text()
 * @method static MobileAdFieldEnum Features()
 * @method static MobileAdFieldEnum TrackingUrl()
 * @method static MobileAdFieldEnum Action()
 * @method static MobileAdFieldEnum AdImageHash()
 * @method static MobileAdFieldEnum AdImageModeration()
 */
final class MobileAdFieldEnum extends Enum
{
    const Title = 'Title';
    const Text = 'Text';
    const Features = 'Features';
    const TrackingUrl = 'TrackingUrl';
    const Action = 'Action';
    const AdImageHash = 'AdImageHash';
    const AdImageModeration = 'AdImageModeration';
}