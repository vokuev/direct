<?php

namespace perf2k2\direct\api\entities\sitelinks;

use perf2k2\direct\api\JsonSerializable;

class Sitelink extends JsonSerializable
{
    protected $Title;
    protected $Href;
    protected $Description;

    public function __construct(string $Title, string $Href, string $Description)
    {
        $this->Title = $Title;
        $this->Href = $Href;
        $this->Description = $Description;
    }
}