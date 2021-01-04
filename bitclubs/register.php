
<?php include_once 'config/init.php'; ?>

<?php
$event = new event;

$template = new Template('templates/user-register.php');

if(isset($_POST['submit'])) 
{


    //Create Data Array
    $data = array();
    $data['usn'] = $_POST['usn'];
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['id'] = $_POST['category'];

    if($event->createU($data))
    {
        redirect('index.php', 'Registration successful', 'success');
    } 
    else 
    {
        redirect('index.php', 'Something went wrong', 'err');
    }

    // $sql = "INSERT INTO registrations (usn,name,email) VALUES ( $data['usn'],$data['name'],$data['email'],$data['id'])";
    // $result = $conn->query($sql);
}

 $template -> categories = $event->getCategories();
 echo $template;