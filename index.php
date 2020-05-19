<?php
require_once "interface/Workable.php";
require_once "classes/Project.php";
require_once "classes/HourlyProject.php";
require_once "classes/MilestoneProject.php";
require_once "classes/Task.php";
require_once "classes/ProjectFeedWriter.php";

$HourlyProject = new HourlyProject('проект','суперпроект описание',28,2,10);
$MilestoneProject = new MilestoneProject('этапный проект','описание проекта',10,3,2000);
$task = new Task('Какая-то задача', 'какое-то описание', '228');
$writer = new ProjectFeedWriter();

?>

<h3>Отображение методов интерфейса из райтера</h3>
<?php
    $writer->addProject($MilestoneProject);
    $writer->addProject($HourlyProject);
    echo $writer->write();
?>
<hr>

<h3>Методы Hourly Project</h3>

    <div>Заголовок: <?=$HourlyProject->getTitle();?></div>
    <div>Описание: <?=$HourlyProject->getDescription();?></div>
    <div>Прогресс: <?=$HourlyProject->getProjectProgress();?> %</div>
    <div>Цена за час: <?=$HourlyProject->getPrice();?> UAH</div>
<hr>

<h3>Методы Milestone Project</h3>
    <div>Заголовок: <?=$MilestoneProject->getTitle();?></div>
    <div>Описание: <?=$MilestoneProject->getDescription();?></div>
    <div>Прогресс: <?=$MilestoneProject->getProjectProgress();?> %</div>
    <div>Цена всего: <?=$MilestoneProject->getPrice();?> UAH</div>
<hr>
<h3>Задача</h3>
    <div>Задача: <?=$task->getTitle()?></div>
    <div>Описание: <?=$task->getDescription()?></div>
    <div>Цена: <?=$task->getPrice()?> UAH</div>
<hr>
