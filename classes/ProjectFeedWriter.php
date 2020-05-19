<?php


class ProjectFeedWriter
{
    protected $projects = [];

    public function addProject(Workable $project){
        $this->projects[] = $project;

    }


    public function write(){
        $response = "";
        foreach ($this->projects as $project){
            $response.= '<div>';
            $response.= '<ul>';
            $response.= '<li>'.$project->getTitle().'</li>';
            $response.= '<li>'.$project->getDescription().'</li>';
            $response.= '<li>'.$project->getPrice().' UAH'.'</li>';
            $response.= '</ul>';
            $response.= '</div>';

        }
        return $response;
    }

}