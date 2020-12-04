<?php include_once 'config/init.php'; ?>

<?php
$event = new event;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
        $template->events = $event->getByCategory($category);
        $template->title = 'events In '. $event->getCategory($category)->name;
} else {
        $template -> title = 'Latest Events';
        $template -> events = $event->getAllevents();
}

$template -> categories = $event->getCategories();

echo $template;
