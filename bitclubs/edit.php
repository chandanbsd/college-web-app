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

$event_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])) {
    //Create Data Array
    $data = array();
    $data['event_title'] = $_POST['event_title'];
    // $data['club'] = $_POST['club'];
    $data['category_id'] = $_POST['category'];
    $data['dept'] = $_POST['dept'];
    $data['sem'] = $_POST['sem'];
    $data['sec'] = $_POST['sec'];
    $data['description'] = $_POST['description'];
    // $data['location'] = $_POST['location'];
    // $data['fee'] = $_POST['fee'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if($event->update($event_id, $data)){
        redirect('index.php', 'Your event has been updated', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'err');
    }
}

$template = new Template('templates/event-edit.php');

$template->event = $event->getevent($event_id);

$template -> categories = $event->getCategories();

echo $template;