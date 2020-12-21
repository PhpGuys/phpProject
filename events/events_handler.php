<?php
require_once __DIR__.'/../db/db_functions.php';
require_once __DIR__.'/../cookie_handler.php';
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
else {
    echo "Не найдено";
}
}

function addContributor($email_contr){
    
    if($email_contr == user_email()){
        return false;
    }
    $id = get_userId($email_contr);
    if($id != false){
        add_contributor($id);
    }
    else return false;
}



?>