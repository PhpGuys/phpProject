<?php
include 'header.php';
?>

<section class="welcome">
    <div class="welcome__title">Добро пожаловать на форум <b><?php echo ', '.$name?></b> !</div>
    <div class="welcome__descr">
    Проект по PHP.
    </div>
    <button onclick="document.location= 'registr.php'" class="welcome__reg">Зарегистироваться</button>
</section>

<?php
include 'footer.php';
?>