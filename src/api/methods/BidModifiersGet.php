<?php

namespace direct\api\methods;

use direct\api\entities\bidmodifiers\BidModifiersSelectionCriteria;
use direct\api\GetMethod;


class BidModifiersGet extends GetMethod
{
    protected $FieldNames = [];
    protected $MobileAdjustmentFieldNames = [];
    protected $DemographicsAdjustmentFieldNames = [];
    protected $RetargetingAdjustmentFieldNames = [];

    public function setSelectionCriteria(BidModifiersSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }

    public function setMobileAdjustmentFieldNames(array $MobileAdjustmentFieldNames): self
    {
        $this->MobileAdjustmentFieldNames = $MobileAdjustmentFieldNames;
        return $this;
    }

    public function setDemographicsAdjustmentFieldNames(array $DemographicsAdjustmentFieldNames): self
    {
        $this->DemographicsAdjustmentFieldNames = $DemographicsAdjustmentFieldNames;
        return $this;
    }

    public function setRetargetingAdjustmentFieldNames(array $RetargetingAdjustmentFieldNames): self
    {
        $this->RetargetingAdjustmentFieldNames = $RetargetingAdjustmentFieldNames;
        return $this;
    }
}