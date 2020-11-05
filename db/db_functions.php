<?php
require_once 'mysql_login.php';

$conn = mysqli_connect($hn,$un,$pw,$db);
if(mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit;
}
table_is_created(); // если таблица с юзерами не создана, создаем


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

function table_is_created() {
    $result = mysqli_query($GLOBALS['conn'], "SHOW TABLES LIKE 'users'");
    if(mysqli_num_rows($result) != 1) {
        mysqli_query($GLOBALS['conn'], "CREATE TABLE users (
            id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
            email VARCHAR(40),
            first_name VARCHAR(12),
            last_name VARCHAR(15),
            password CHAR(32))");
    }
}