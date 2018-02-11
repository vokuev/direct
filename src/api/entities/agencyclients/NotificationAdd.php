<?php

namespace api\entities\agencyclients;

use perf2k2\direct\api\JsonSerializable;

class NotificationAdd extends JsonSerializable
{
    protected $Lang;
    protected $Email;
    protected $EmailSubscriptions;
    
    public function __construct(string $Lang, string $Email, array $EmailSubscriptions)
    {
        $this->Lang = $Lang;
        $this->Email = $Email;
        $this->EmailSubscriptions = $EmailSubscriptions;
    }
}