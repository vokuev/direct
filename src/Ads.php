<?php

namespace perf2k2\direct;

use perf2k2\direct\api\ArchiveMethod;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\AdsAdd;
use perf2k2\direct\api\methods\AdsGet;
use perf2k2\direct\api\methods\AdsUpdate;
use perf2k2\direct\api\ModerateMethod;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;
use perf2k2\direct\api\UnarchiveMethod;

class Ads
{
    public static function getApiName(): string
    {
        return 'ads';
    }

    public static function add(): AdsAdd
    {
        return new AdsAdd(self::getApiName());
    }

    public static function archive(): ArchiveMethod
    {
        return new ArchiveMethod(self::getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }

    public static function get(): AdsGet
    {
        return new AdsGet(self::getApiName());
    }

    public static function moderate(): ModerateMethod
    {
        return new ModerateMethod(self::getApiName());
    }

    public static function resume(): ResumeMethod
    {
        return new ResumeMethod(self::getApiName());
    }

    public static function suspend(): SuspendMethod
    {
        return new SuspendMethod(self::getApiName());
    }

    public static function unarchive(): UnarchiveMethod
    {
        return new UnarchiveMethod(self::getApiName());
    }

    public static function update(): AdsUpdate
    {
        return new AdsUpdate(self::getApiName());
    }
}