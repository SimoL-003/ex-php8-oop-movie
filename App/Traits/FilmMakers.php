<?php
trait FilmMakers
{
    public string $producer;
    public string $filmCompany;

    public function getProductionInfo()
    {
        $productionInfo = "{$this->producer} - {$this->filmCompany}";
        return $productionInfo;
    }
}