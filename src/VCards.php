<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\VCardsGet;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;

class VCards extends Service implements ServiceInterface
{
    public static function getApiName(): string
    {
        return 'vcards';
    }

    public static function get(): VCardsGet
    {
        return new VCardsGet((new self())->getApiName());
    }
}