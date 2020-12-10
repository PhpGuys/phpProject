<?php
require_once 'events_handler.php';
if(isset($_POST['email_contrdelete'])) 
{
$email = htmlentities(mysqli_escape_string($conn, $_POST['email_contr'])); 

if(get_userId($email) == true)
{
    $id = get_userId($email);
    delete_contributor($id);
    echo "<script>
        alert('Пользователь удален!');
        document.location.href='../profile.php';
        </script>";   
    
}
else
{
    echo "Данные введены неверно !";
}

}
mysqli_close($conn);
?>