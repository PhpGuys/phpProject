<?php

function user_firstname(){
    if(isset($_COOKIE["firstName"]))
    {
        return $_COOKIE["firstName"];
    }
    else{
        return "Не найдено";
    }
} 
function user_lastname(){
    if(isset($_COOKIE["lastName"])){
        return $_COOKIE["lastName"];
    }
    else{
        return "Не найдено";
    }
}
function user_email(){
    if(isset($_COOKIE['email'])){
        return $_COOKIE['email'];
    }
    else{
        return "Не найдено";
    }
}

function is_authorized(){
    if( isset($_COOKIE['email']) && isset($_COOKIE["lastName"]) &&
     isset($_COOKIE["firstName"]) ){
        return true;
    }
    else return false;
}

?>