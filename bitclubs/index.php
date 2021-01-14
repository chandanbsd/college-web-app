<?php include_once 'config/init.php'; ?>

<?php
$event = new event;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;
$dept = isset($_GET['dept']) ? $_GET['dept'] : null;
$sem = isset($_GET['sem']) ? $_GET['sem'] : null;
$sec = isset($_GET['sec']) ? $_GET['sec'] : null;


if($category){
        $template->events = $event->getByCategory($category);
        $template->title =  $event->getCategory($category)->name;
        $template -> categories = $event->getCategories();
} 

elseif($dept)
{
		$template->events = $event->getByDept($dept);
        $template->title =  'Notifications Specific to '.$event->getDept($dept)->name.' Department';
        $template -> dept = $event->getDepts();
}

elseif($sem)
{
		$template->events = $event->getBySem($sem);
        $template->title =  'Notifications Specific to '.$event->getSem($sem)->name.' Semester';
        $template -> dept = $event->getSems();
}


elseif($sec)
{
		$template->events = $event->getBySec($sec);
        $template->title =  'Notifications Specific to '.$event->getSec($sec)->name.' Section';
        $template -> dept = $event->getSecs();
}

else 
{
        $template -> title = 'Notification';
        $template -> events = $event->getAllevents();
        $template -> categories = $event->getCategories();
}



echo $template;

// getAllPostDates()