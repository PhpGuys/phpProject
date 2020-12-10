<?php
require_once 'header.php';
?>

<div id="main">
<div class="row" id="real-estates-detail">
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
<header class="panel-title">
<div class="text-center">
<strong>Пользователь сайта</strong>
</div>
</header>
</div>
<div class="panel-body">
<div class="text-center" id="author">
<img src="ref">
<h3> <?php echo $user_firstname;  ?> </h3>
<small class="label label-warning">Country</small>
<!-- <p>Description</p>
<p class="sosmed-author">
<a href="#"><i class="fa fa-facebook" title="Contacts"></i></a>
<a href="#"><i class="fa fa-twitter" title="Contacts"></i></a>
<a href="#"><i class="fa fa-google-plus" title="Contacts"></i></a>
<a href="#"><i class="fa fa-linkedin" title="Contacts"></i></a>
</p> -->
</div>
</div>
</div>
</div>
<div class="col-lg-8 col-md-8 col-xs-12">
<div class="panel">
<div class="panel-body">
<ul id="myTab" class="nav nav-pills">
<li class="active">О пользователе</li>
</ul>
<div id="myTabContent" class="tab-content">
<hr>
<div class="tab-pane fade active in" id="detail">
<h4>Ваш профиль</h4>
<table class="table table-th-block">
<tbody>
<tr><td class="active">Имя пользователя:</td><td> <?php echo user_firstname();  ?> </td></tr>
<tr><td class="active">Фамилия пользователя:</td><td> <?php echo user_lastname();  ?></td></tr>
<tr><td class="active">Страна:</td><td>Россия</td></tr>
<tr><td class="active">Город:</td><td>город????</td></tr>
<tr><td class="active">Возраст:</td><td>возраст</td></tr>
<tr><td class="active">Почта:</td><td> <?php echo user_email(); ?> </td></tr>
<tr><td class="active">Номер телефона:</td><td>телефон</td></tr>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="news-feeds">
<div class="news-feeds__title">
    Доступные новостные ленты:
</div>
<div class="news-feeds__list">
   <?php require_once 'events/events_handler.php';
    get_eventfeeds(user_email()); ?>
</div>
<div class="news-feeds__myEvents">
<div class="news-feeds__title">
    Моя новостная лента:
</div>
<a href="events/calendar.php" class="news-feeds__link">Перейти в новостную ленту</a>    
</div>
</div> 
<?php
include 'footer.php';
?>
