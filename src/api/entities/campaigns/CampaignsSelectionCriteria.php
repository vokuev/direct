<?php

namespace perf2k2\direct\api\entities\campaigns;

final class CampaignsSelectionCriteria
{
    public $Ids = [];
    public $Types = [];
    public $States = [];
    public $Statuses = [];
    public $StatusesPayment = [];

    const MAX_IDS = 1000;

    public function setIds(array $Ids): self
    {
        $this->Ids = $Ids;
        return $this;
    }

    public function setTypes(array $Types): self
    {
        $this->Types = $Types;
        return $this;
    }

    public function setStates(array $States): self
    {
        $this->States = $States;
        return $this;
    }

    public function setStatuses(array $Statuses): self
    {
        $this->Statuses = $Statuses;
        return $this;
    }

    public function setStatusesPayment(array $StatusesPayment): self
    {
        $this->StatusesPayment = $StatusesPayment;
        return $this;
    }
}