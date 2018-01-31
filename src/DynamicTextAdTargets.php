<?php

namespace perf2k2\direct;

use api\methods\DynamicTextAdTargetsAdd;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;

class DynamicTextAdTargets
{
    public static function getApiName(): string
    {
        return 'dynamictextadtargets';
    }

    public static function add(): DynamicTextAdTargetsAdd
    {
        return new DynamicTextAdTargetsAdd(self::getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }

    public static function resume(): ResumeMethod
    {
        return new ResumeMethod(self::getApiName());
    }

    public static function suspend(): SuspendMethod
    {
        return new SuspendMethod(self::getApiName());
    }
}