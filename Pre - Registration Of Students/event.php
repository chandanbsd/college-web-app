<?php include_once 'config/init.php'; ?>


<?php
$event = new event;

if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($event->delete($del_id)){
        redirect('index.php', 'event Deleted', 'success');
    } else {
        redirect('index.php', 'event Not Deleted', 'error');
    }
}

$template = new Template('templates/event-single.php');

$event_id = isset($_GET['id']) ? $_GET['id'] : null;

$template -> event = $event->getevent($event_id);

echo $template;