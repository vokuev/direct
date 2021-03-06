<?php

namespace direct\api\entities\dynamictextadtargets;

use direct\api\Entity;

class WebpageAddItem extends Entity
{
    protected $Name;
    protected $AdGroupId;
    protected $Conditions;
    protected $Bid;
    protected $ContextBid;
    protected $StrategyPriority;
    
    public function __construct(string $Name, int $AdGroupId)
    {
        $this->Name = $Name;
        $this->AdGroupId = $AdGroupId;
    }
    
    public function setConditions(array $Conditions)
    {
        $this->Conditions = $Conditions;
        return $this;
    }
    
    public function setBid(int $Bid)
    {
        $this->Bid = $Bid;
        return $this;
    }
    
    public function setContextBid(int $ContextBid)
    {
        $this->ContextBid = $ContextBid;
        return $this;
    }
    
    public function setStrategyPriority(string $StrategyPriority)
    {
        $this->StrategyPriority = $StrategyPriority;
        return $this;
    }
}