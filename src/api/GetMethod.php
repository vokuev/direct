<?php

namespace direct\api;

use direct\api\AbstractService;
use direct\api\entities\LimitOffset;

abstract class GetMethod extends AbstractMethod
{
    protected $SelectionCriteria;
    protected $FieldNames;
    protected $Page;

    public function __construct(AbstractService $service)
    {
        $this->Page = new LimitOffset();
        parent::__construct($service);
    }

    public function getApiName(): string
    {
        return 'get';
    }

    public function setFieldNames(array $FieldNames)
    {
        $this->FieldNames = $FieldNames;
        return $this;
    }

    public function setPage(LimitOffset $Page)
    {
        $this->Page = $Page;
        return $this;
    }
}