<?php
require_once 'db_functions.php';


if(isset($_POST['first-name']) && isset($_POST['last-name']) && 
    isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['psw-repeat'])) 
{
$firstName = htmlentities(mysqli_escape_string($conn, $_POST['first-name']));
$lastName = htmlentities(mysqli_escape_string($conn, $_POST['last-name'])); 
$email = htmlentities(mysqli_escape_string($conn, $_POST['email'])); 
$password = htmlentities(mysqli_escape_string($conn, $_POST['psw']));  
$psw_rpt = htmlentities(mysqli_escape_string($conn, $_POST['psw-repeat'])); 

if(user_is_exist($email) == true){
    echo "Пользователь с таким email уже существует!";
    return;
}
else{
    if( (strlen($firstName) > 12 ) || (strlen($firstName) < 3 ) || (strlen($lastName) > 15) )
    {
    echo "Некорректно введено имя или фамилия! (не менее 3 и не более 12 символов, фамилия - не более 15)";
    }
    else if((strlen($password) > 32 ) || (strlen($password) < 4 ))
    {
        echo "Ошибка! Длина пароля не менее 4 символов (и не более 32)";
    }
    else if($password == $psw_rpt)
    {
        echo "Регистрация пройдена успешно";
        add_user($email, $firstName, $lastName, $password);
        
    }
    else{
        echo "Повторно введенный пароль не совпадает с текущим";
    }

}

}
else
{
    echo "Ошибка при отправке данных";
}
mysqli_close($conn);
?>