<?php
require_once 'db_functions.php';
require_once '../cookie_handler.php';
if(isset($_POST['email']) && isset($_POST['psw']) ) 
{
$email = htmlentities(mysqli_escape_string($conn, $_POST['email'])); 
$password = htmlentities(mysqli_escape_string($conn, $_POST['psw'])) ;  

if(pass_is_equals($email, $password) == true)
{
    setcookie("firstName", get_fname_byEmail($email), time()+60*60*24, "/");
    setcookie("lastName", get_lname_byEmail($email), time()+60*60*24, "/");
    setcookie("email", $email, time()+60*60*24, "/");

    echo "<script>
        alert('Авторизация прошла успешно!');
        document.location.href='../profile.php';
        </script>";   
    
}
else
{
    echo "Логин или пароль введены неверно";
}

}
mysqli_close($conn);
?>