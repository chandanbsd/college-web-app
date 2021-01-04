<?php
// first thing is to start session 
session_start();
// now to check if variable is true

if(!$_SESSION['anything'])
{
    header('location:login.php');
}
?>

<?php include_once 'config/init.php'; ?>

<?php
$event = new event;

$template = new Template('templates/event-create.php');

if(isset($_POST['submit'])) {
    //Create Data Array
    $data = array();
    $data['event_title'] = $_POST['event_title'];
    $data['club'] = $_POST['club'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['fee'] = $_POST['fee'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if($event->create($data)){
        redirect('index.php', 'Your event has been listed', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'err');
    }
}

$template -> categories = $event->getCategories();

echo $template;