<?php
require_once 'db_functions.php';

if(isset($_POST['email']) && isset($_POST['psw']) ) 
{
$email = htmlentities(mysqli_escape_string($conn, $_POST['email'])); 
$password = htmlentities(mysqli_escape_string($conn, $_POST['psw'])) ;  

if(pass_is_equals($email, $password) == true)
{
    echo "<div style='margin: 0 auto; text-align: center; font-size: 30px;'>
    Авторизация прошла успешно!
    <a href='../index.php'>На главную</a>
    </div>";
   
}
else
{
    echo "Логин или пароль введены неверно";
}

}
mysqli_close($conn);
?>