<?php


class Task implements Workable
{
    protected $title;
    protected $description;
    protected $price;

    public function __construct($title, $description, $price)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }


    public function getTitle(){
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getPrice(){
        return $this->price;
    }
}