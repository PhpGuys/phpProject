<?php
require_once 'events_handler.php';
if(isset($_POST['calendar_delete']) && isset($_POST['title_delete']) ) 
{
$title = htmlentities(mysqli_escape_string($conn, $_POST['title_delete'])); 
$date = $_POST['calendar_delete'];
$authorOfEvent  = user_firstname()." ".user_lastname();

$nameEventfeed = get_eventfeedNameByAuthor($authorOfEvent);
    delete_event($title, $date, $nameEventfeed);
    echo "<script>
        alert('Событие удалено!');
        document.location.href='../profile.php';
        </script>";   
    
}
else
{
    echo "Данные введены неверно";
}


?>

