<?php

namespace direct\api\entities\campaigns\dynamictextcampaign;

use direct\api\Entity;

class DynamicTextCampaignAddItem extends Entity
{
    protected $BiddingStrategy;
    protected $Settings;
    protected $CounterIds;

    public function __construct(DynamicTextCampaignStrategyAdd $BiddingStrategy)
    {
      $this->BiddingStrategy = $BiddingStrategy;
    }

    public function setSettings(array $Settings = null)
    {
      $this->Settings = $Settings;
      return $this;
    }

    public function setCounterIds($CounterIds)
    {
      $this->CounterIds = $CounterIds;
      return $this;
    }

}
