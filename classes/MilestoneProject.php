<?php


class MilestoneProject extends Project
{
    protected $totalStagesAmount;
    protected $currentStage;
    protected $totalPrice;


    public function __construct($title,$description,$totalStagesAmount, $currentStage, $totalPrice)
    {
        parent::__construct($title,$description);
        $this->totalStagesAmount = $totalStagesAmount;
        $this->currentStage = $currentStage;
        $this->totalPrice = $totalPrice;
    }

    public function getPrice()
    {
        return $this->totalPrice;
        //общая стоимость
    }

    public function getProjectProgress()
    {
        return round(($this->currentStage / $this->totalStagesAmount) * 100 , 2);
        //на сколько процентов реализована работа по этапам
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }
}