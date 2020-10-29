<?php
include 'header.php';
?>
<div class="form">
<form class="login-form" action="db/login_user.php" method="post">

    <h1 class="login-title">Авторизация</h1>
    
    <hr>
    <label for="email"><b>Email</b></label>
    <input class="login-field" type="text" placeholder="Email" name="email" required>

    <label for="psw"><b>Пароль</b></label>
    <input class="login-field" type="password" placeholder="Пароль" name="psw" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Запомнить меня
    </label>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Закрыть</button>
      <button type="submit" class="signupbtn">Войти</button>
    </div>

</form>
</div>


<?php
include 'footer.php';
?>