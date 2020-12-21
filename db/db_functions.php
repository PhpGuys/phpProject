<?php
require_once 'mysql_login.php';

$conn = mysqli_connect($hn,$un,$pw,$db);
if(mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit;
}
table_is_created(); // если таблица с юзерами не создана, создаем
eventfeeds_is_created();   // проверка, создана ли  таблица с лентой событий, если не создана - создаем
events_is_created();      // проверка, создана ли  таблица  событий, если не создана - создаем

//                  <  функции для работы с таблицей users >
function add_user($email, $first_name, $last_name, $password) {
    if(!user_is_exist($email)) {
        $cipher_pass = md5($password);
        $result = mysqli_query($GLOBALS['conn'], "INSERT INTO users (email, first_name, last_name, password)
                                                  VALUES('{$email}','{$first_name}','{$last_name}','{$cipher_pass}')");
        return $result;
    } else return false;
}
function user_is_exist($email) { // функция проверяет есть ли пользователь с таким email
    $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM users WHERE email='{$email}'"); 
    if(mysqli_num_rows($result) == 1) return true;
    else return false;
}
function pass_is_equals($email, $pass) { // функция проверяет схожи ли пароли
    $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM users WHERE email='{$email}'"); 
    if(mysqli_num_rows($result) < 1) return;
    $row = mysqli_fetch_assoc($result);
    if(md5($pass) == $row['password']) return true;
    else return false;
}
function get_fname_byEmail($email_form){
    $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM users WHERE email='{$email_form}'"); 
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $fname =  $row['first_name'];
        return $fname;
    }
   
    else return "Не найдено";
}
function get_lname_byEmail($email_form){
    $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM users WHERE email='{$email_form}'"); 
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $lname =  $row['last_name'];
        return $lname;
    }
   
    else return "Не найдено";
}
function get_userId($email) {
    $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM users WHERE email='{$email}'"); 
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $id =  $row['id'];
        return $id;
    }
   
    else return "Не найдено";
}

function table_is_created() {
    $result = mysqli_query($GLOBALS['conn'], "SHOW TABLES LIKE 'users'");
    if(mysqli_num_rows($result) != 1) {
        mysqli_query($GLOBALS['conn'], "CREATE TABLE users (
            id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
            email VARCHAR(40),
            first_name VARCHAR(20),
            last_name VARCHAR(20),
            password CHAR(32))");
    }
}
//                  </ функции для работы с таблицей users >



//                  <  функции для работы с таблицей event_feeds >
function eventfeeds_is_created() {
    $result = mysqli_query($GLOBALS['conn'], "SHOW TABLES LIKE 'event_feeds'");
    if(mysqli_num_rows($result) != 1) {
        mysqli_query($GLOBALS['conn'], "CREATE TABLE event_feeds (
            id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
            name VARCHAR(100),
            author VARCHAR(50),
            contributors MEDIUMTEXT)");
    }
}

function eventfeed_is_exist($name_eventfeed, $author){
    $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM event_feeds WHERE name='{$name_eventfeed}', author = '{$author}'"); 
    if(mysqli_num_rows($result) == 1) return true;
    else return false;
}

function add_eventfeed($name, $author) {
    if(!eventfeed_is_exist($name, $author)) {
        $result = mysqli_query($GLOBALS['conn'], "INSERT INTO event_feeds (name, author)
                                                  VALUES('{$name}','{$author}')");
        return $result;
    } else return false;
}
function delete_eventfeed($name, $author) {
    $result = mysqli_query($GLOBALS['conn'], "DELETE FROM event_feeds WHERE name = '$name', author = '$author'");
return $result;
}
function get_eventfeedNameByAuthor($author) {
    $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM event_feeds WHERE author = '{$author}'");
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $name =  $row['name'];
        return $name;
    }
   
    else return "Не найдено"; 
}
function add_contributor($id_contr) {
    $user_result = mysqli_query($GLOBALS['conn'], "SELECT * FROM users WHERE id='{$id_contr}'"); 
    if(mysqli_num_rows($user_result) == 1) {
        $space = " ";
        $result = mysqli_query($GLOBALS['conn'], 
        "UPDATE event_feeds SET contributors = '$id_contr.$space' WHERE id='{$id_contr}'");
    }
    else return false;
}
function delete_contributor($id_contr) {
    $user_result = mysqli_query($GLOBALS['conn'], "SELECT * FROM users WHERE id='{$id_contr}'"); 
    if(mysqli_num_rows($user_result) == 1) {
        $space = " ";
        $result = mysqli_query($GLOBALS['conn'], 
        "UPDATE event_feeds SET contributors = '$id_contr.$space' WHERE id='{$id_contr}'");
    }
    else return false;
}
//                  </ функции для работы с таблицей event_feeds >

//                  < функции для работы с таблицей events >

function events_is_created() {
    $result = mysqli_query($GLOBALS['conn'], "SHOW TABLES LIKE 'events'");
    if(mysqli_num_rows($result) != 1) {
        mysqli_query($GLOBALS['conn'], "CREATE TABLE events (
            id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
            title VARCHAR(120),
            text VARCHAR(2000),
            author VARCHAR(50),
            date DATE,
            eventfeed_name VARCHAR(100))");
    }
}

function event_is_exist($name_eventfeed){
    $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM events WHERE eventfeed_name='{$name_eventfeed}'"); 
    if(mysqli_num_rows($result) == 1) return true;
    else return false;
}

function add_event($name, $text, $author, $date, $eventfeed) {
        $result = mysqli_query($GLOBALS['conn'], "INSERT INTO events (title, text, author, date, eventfeed_name)
                                                  VALUES('{$name}','{$text}', '{$author}', '{$date}', '{$eventfeed}')");
        return $result;
}
function delete_event($title, $date, $name_eventfeed) {
    $result = mysqli_query($GLOBALS['conn'], "DELETE FROM events WHERE title = '$title' && eventfeed_name = '$name_eventfeed' && date='$date' ");
return $result;
}

function getEvent($day, $month, $year, $eventfeed, $author) {

$year = (int)$year;
$month = (int)$month;
$day = (int)$day;
if($day < 10){
    $day = (string)'0'.$day;
}
if($month < 10){
    $month = (string)'0'.$month;
}
$date = $year.'-'.$month.'-'.$day;

$result = mysqli_query($GLOBALS['conn'], "SELECT * FROM events WHERE date='{$date}' && eventfeed_name='{$eventfeed}' && author='{$author}'"); 
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $title =  $row['title'];
        $text =  $row['text'];

        return $title.'  '.$text;
    }
    else{
        return false;
    }
}

//                  </ функции для работы с таблицей events >
