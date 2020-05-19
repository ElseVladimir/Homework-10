<?php


class HourlyProject extends Project
{
    protected $totalAmountHours;
    protected $currentTimeSpent;
    protected $oneHourPrice;

    public function __construct($title,$description,$totalAmountHours, $currentTimeSpent, $oneHourPrice)
    {
        parent::__construct($title,$description);
        $this->totalAmountHours = $totalAmountHours;
        $this->currentTimeSpent = $currentTimeSpent;
        $this->oneHourPrice = $oneHourPrice;
    }


    public function getPrice()
    {
        return $this->oneHourPrice;
        //стоимость часа
    }

    public function getProjectProgress()
    {
        return round(($this->currentTimeSpent / $this->totalAmountHours) * 100, 2);
        //на сколько процентов сделана работа в часах
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