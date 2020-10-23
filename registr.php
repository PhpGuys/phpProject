<?php
include 'header.php';
?>

<form class="registr-form" action="action_page.php">

    <h1 class="reg-title">Регистрация</h1>
    <p style="text-align: center;">Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input class="reg-field" type="text" placeholder="Enter Email" name="email" required>

    <label for="name"><b>Имя</b></label>
    <input class="reg-field" type="text" placeholder="Имя" name="name" required>

    <label for="psw"><b>Пароль</b></label>
    <input class="reg-field" type="password" placeholder="Пароль" name="psw" required>

    <label for="psw-repeat"><b>Повторите пароль</b></label>
    <input class="reg-field" type="password" placeholder="Повторите пароль" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Запомнить меня
    </label>

    <p>Создавая аккаунт, вы соглашаетесь с нашей 
    <a href="privacy.php" style="color:dodgerblue">
    Политикой конфиденциальности</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Закрыть</button>
      <button type="submit" class="signupbtn">Зарегистрироваться</button>
    </div>

</form>
<?php
include 'footer.php';
?>