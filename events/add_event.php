<?php
require_once 'events_handler.php';
if(isset($_POST['calendar']) && isset($_POST['title']) && isset($_POST['text']) ) 
{
$title = htmlentities(mysqli_escape_string($conn, $_POST['title'])); 
$text = htmlentities(mysqli_escape_string($conn, $_POST['text'])); 
$authorOfEvent  = user_firstname()." ".user_lastname();
$date = $_POST['calendar']; 
$eventfeedName = get_eventfeedNameByAuthor($authorOfEvent);

if(event_is_exist($title, $eventfeedName, $date) == true){
    echo "<script>
    alert('Ошибка! Событие с таким названием уже добавлено!');
    document.location.href='calendar.php';
    </script>";   
}

else {
    add_event($title, $text, $authorOfEvent, $date, $eventfeedName);
    echo "<script>
        alert('Событие добавлено!');
        document.location.href='calendar.php';
        </script>"; 
}
  
}
else {
    echo "Ошибка отправки";
}

?>