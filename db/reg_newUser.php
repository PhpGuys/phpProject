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
    if( (mb_strlen($firstName) > 20 ) || (mb_strlen($firstName) < 3 ) || (mb_strlen($lastName) > 20) )
    {
    echo "Некорректно введено имя или фамилия! (не менее 3 и не более 20 символов, фамилия - не более 20)";
    }
    else if((mb_strlen($password) > 32 ) || (mb_strlen($password) < 4 ))
    {
        echo "Ошибка! Длина пароля не менее 4 символов (и не более 32)";
    }
    else if($password == $psw_rpt)
    {
        add_user($email, $firstName, $lastName, $password);
        setcookie("firstName", $firstName, time()+60*60*24, "/");
        setcookie("lastName", $lastName, time()+60*60*24, "/");
        setcookie("email", $email, time()+60*60*24, "/");
        
        echo "<script>
        alert('Регистрация прошла успешно!');
        document.location.href='../profile.php';
        </script>";        
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