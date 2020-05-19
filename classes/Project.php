<?php
abstract class Project implements Workable
{
    protected $title;
    protected $description;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    abstract public function getPrice();
    abstract public function getProjectProgress();
}
