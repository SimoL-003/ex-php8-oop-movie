<?php
trait FilmMakers
{
    public $producer;
    public $filmCompany;

    public function getProductionInfo()
    {
        $productionInfo = "{$this->producer} - {$this->filmCompany}";
        return $productionInfo;
    }
}