<?php
require_once '../db/db_functions.php';
require_once '../cookie_handler.php';
$email = user_email();
function get_eventfeeds($email) {

    $query = "SELECT * FROM event_feeds";

if ($result = mysqli_query($GLOBALS['conn'], $query)) {
    $user_id = get_userId($email);
    while ($row = mysqli_fetch_assoc($result)) {
        if(strpos($row['contributors'], $user_id) != null){
            echo "<a href='events/calendar.php' class='news-feeds__link'>'{$row['name']}'</a>";

        }
        
    }
}
mysqli_free_result($result);

}


?>