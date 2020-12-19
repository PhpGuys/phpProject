<?php
require_once 'events_handler.php';
if(isset($_POST['calendar']) && isset($_POST['title']) && isset($_POST['text']) ) 
{
$title = htmlentities(mysqli_escape_string($conn, $_POST['title'])); 
$text = htmlentities(mysqli_escape_string($conn, $_POST['text'])); 
$authorOfEvent  = get_fname_byEmail($email)." ".get_lname_byEmail($email);
$date = htmlentities(mysqli_escape_string($conn, $_POST['calendar'])); 
$eventfeedName = get_eventfeedNameByAuthor($authorOfEvent); 

add_event($title, $text, $authorOfEvent, $date, $eventfeedName);
echo "<script>
    alert('Событие добавлено!');
    document.location.href='../calendar.php';
    </script>";   


}
else {
    echo "Ошибка отправки";
}

?>