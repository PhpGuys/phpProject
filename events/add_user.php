<?php
require_once 'events_handler.php';
if(isset($_POST['email_contr'])) 
{
$email = htmlentities(mysqli_escape_string($conn, $_POST['email_contr'])); 

if(get_userId($email) == true)
{
    $id = get_userId($email);
    add_contributor($id);
    echo "<script>
        alert('Пользователь добавлен!');
        document.location.href='../profile.php';
        </script>";   
    
}
else
{
    echo "Данные введены неверно ИЛИ такого пользователя не существует";
}

}
mysqli_close($conn);
?>