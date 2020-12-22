<?php
require_once 'events_handler.php';
if(isset($_POST['calendar_edit']) && isset($_POST['title_edit']) && isset($_POST['text_edit']) ) 
{
$title = htmlentities(mysqli_escape_string($conn, $_POST['title_edit'])); 
$text = htmlentities(mysqli_escape_string($conn, $_POST['text_edit'])); 
$authorOfEvent  = user_firstname()." ".user_lastname();
$date = $_POST['calendar_edit']; 
$eventfeedName = get_eventfeedNameByAuthor($authorOfEvent);

    edit_event($title, $date, $eventfeedName, $authorOfEvent, $text);
    echo "<script>
        alert('Событие отредактировано!');
        document.location.href='../profile.php';
        </script>"; 

  
}
else {
    echo "Ошибка отправки";
}

?>