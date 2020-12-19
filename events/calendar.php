
<!DOCTYPE html>
<html>
<head>
<?php 
require_once __DIR__.'/events_handler.php';
?>
   <title>Календарь событий</title>
     <link href="../images/favicon.ico" 
  rel = "shortcut icon" type="image/x-icon">
  <link rel="stylesheet" href="../css/calendar.css">

<style type="text/css">

</style>

</head>
 <body onload="clockTimer();">
      <header>
<div class="logo">
    <a class="logo__link" href="#">
      <img src="../images/logo.png" alt="logo" width="80" height="80">
    </a>
    <div class="logo__headline">Events</div>
         <div class="clockpage">
            <span id="clock"></span>
            <span id="dayOfWeek"></span>          
        </div>
</div>
            <nav>
               <ul>
                  <li><a href="../index.php">На главную</a></li>
                  <li><a href="../profile.php">Профиль</a></li>
                  <!-- <li><a href="#">Активные события</a></li> -->
               </ul>
            </nav>
      </header>
   <!-- <div id="Data">
      <form>
         <input type="button" name="minus" value="<<" class="INP" >
         <input type="number" name="year" min="2020" max="2040" step="1" value="2020"style="font-size: 200%; text-align: center; font-weight: bold;">
         <input type="button" name="plus" value=">>" class="INP">    
      </form>
   </div> -->
<main class="calendar">

<table id="calendarBig">
 <thead>
  <tr><td><td><td>
 <tbody>
  <tr>
    <td>
      <table data-m="0">
        <thead>
          <tr><td colspan="7">Январь
          <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
        <tbody>
      </table>
    <td>
      <table data-m="1">
        <thead>
          <tr><td colspan="7">Февраль
          <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
        <tbody>
      </table>
    <td>
      <table data-m="2">
        <thead>
          <tr><td colspan="7">Март
          <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
        <tbody>
      </table>
  <tr>
    <td>
      <table data-m="3">
        <thead>
          <tr><td colspan="7">Апрель
          <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
        <tbody>
      </table>
    <td>
      <table data-m="4">
        <thead>
          <tr><td colspan="7">Май
          <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
        <tbody>
      </table>
    <td>
      <table data-m="5">
        <thead>
          <tr><td colspan="7">Июнь
          <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
        <tbody>
      </table>
  <tr>
    <td>
      <table data-m="6">
        <thead>
          <tr><td colspan="7">Июль
          <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
        <tbody>
      </table>
    <td>
      <table data-m="7">
        <thead>
          <tr><td colspan="7">Август
          <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
        <tbody>
      </table>
    <td>
      <table data-m="8">
        <thead>
          <tr><td colspan="7">Сентябрь
          <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
        <tbody>
      </table>
  <tr>
    <td>
      <table data-m="9">
        <thead>
          <tr><td colspan="7">Октябрь
          <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
        <tbody>
      </table>
    <td>
      <table data-m="10">
        <thead>
          <tr><td colspan="7">Ноябрь
          <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
        <tbody>
      </table>
    <td>
      <table data-m="11">
        <thead>
          <tr><td colspan="7">Декабрь
          <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
        <tbody>
      </table>
</table>

<h3>Добавить событие</h3>
      <form class="Form_Data" method="$_POST" action="add_event.php">
       
         <input type="date" name="calendar" min="2020-10-10" max="2080-05-20">
         <input type="text" placeholder="Заголовок" name="title">
         <textarea placeholder="Описание" name="text">

         </textarea>
         <button type="submit">Добавить</button>

      </form>
      <h3>Удалить событие</h3>
      <form class="Form_Data" method="$_POST" action="delete_event.php">
       
         <input type="date" min="2020-10-10" max="2080-05-20" name="calendar_delete">
         <input type="text" placeholder="Заголовок" name="title_delete" >
         <button type="submit">Удалить</button>

      </form>

      <br style="background-color: #5291cc; border-radius: 4px;">
      <h3>Добавить пользователя</h3>
      <form class="Form_Data" method="$_POST" action="add_user.php">
         <input type="text" placeholder="Эл.почта пользователя" name="email_contr">
         <button type="submit">Добавить</button>
      </form>
      <h3>Удалить пользователя</h3>
      <form class="Form_Data" method="$_POST" action="delete_user.php">
         <input type="text" placeholder="Эл.почта пользователя" name="email_contrdelete">
         <button type="submit">Удалить</button>
      </form>
      <div class="contributors">

      </div> 
      
</main>

        <script type="text/javascript">
           function clockTimer()
{
    var date = new Date();
    
    var time = [date.getHours(),date.getMinutes()]; 
    var dayOfWeek = ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"]
    var days = date.getDay();
    
    if(time[0] < 10){time[0] = "0"+ time[0];}
    if(time[1] < 10){time[1] = "0"+ time[1];}
    
    var current_time = [time[0],time[1]].join(':');
    var clock = document.getElementById("clock");
    var day = document.getElementById("dayOfWeek");
    
    clock.innerHTML = current_time;
    day.innerHTML = dayOfWeek[days];
      
    setTimeout("clockTimer()", 1000);
}
        </script>
  <!--------------------------------------------------------------------------->

        <script>
function calendarBig(year) {
for (var m = 0; m <= 11; m++) {
var D = new Date(year,[m],1),
    Dlast = new Date(D.getFullYear(),D.getMonth()+1,0).getDate(),
    DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
    DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
    calendar = '<tr>';

if (DNfirst != 0) {
  for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
}else{
  for(var  i = 0; i < 6; i++) calendar += '<td>';
}

for(var  i = 1; i <= Dlast; i++) {
  if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
    calendar += '<td class="today">'  + '<span class="tooltip" tabindex="0">'+ i +'<span>Подсказка</span></span>';
  }else{
    if (
        (i == 1 && D.getMonth() == 0 && ((D.getFullYear() > 1897 && D.getFullYear() < 1930) || D.getFullYear() > 1947)) ||
        (i == 2 && D.getMonth() == 0 && D.getFullYear() > 1992) ||
        ((i == 3 || i == 4 || i == 5 || i == 6 || i == 8) && D.getMonth() == 0 && D.getFullYear() > 2004) ||
        (i == 7 && D.getMonth() == 0 && D.getFullYear() > 1990) ||
        (i == 23 && D.getMonth() == 1 && D.getFullYear() > 2001) ||
        (i == 8 && D.getMonth() == 2 && D.getFullYear() > 1965) ||
        (i == 1 && D.getMonth() == 4 && D.getFullYear() > 1917) ||
        (i == 9 && D.getMonth() == 4 && D.getFullYear() > 1964) ||
        (i == 12 && D.getMonth() == 5 && D.getFullYear() > 1990) ||
        (i == 7 && D.getMonth() == 10 && (D.getFullYear() > 1926 && D.getFullYear() < 2005)) ||
        (i == 8 && D.getMonth() == 10 && (D.getFullYear() > 1926 && D.getFullYear() < 1992)) ||
        (i == 4 && D.getMonth() == 10 && D.getFullYear() > 2004)
       ) {
      calendar += '<td class="holiday">' + '<span class="tooltip" tabindex="0">'+ i +'<span>Подсказка</span></span>';
    }else{
      calendar += '<td>'  + '<span class="tooltip" tabindex="0">'+ i +'<span>Подсказка</span></span>';
    }
  }
  if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
    calendar += '<tr>';
  }
}

if (DNlast != 0) {
  for(var  i = DNlast; i < 7; i++) calendar += '<td>';
}

document.querySelector('#calendarBig table[data-m="' + [m] + '"] tbody').innerHTML = calendar;
document.querySelector('#calendarBig > thead td:nth-child(2)').innerHTML = 'Календарь на ' + year + ' год';
document.querySelector('#calendarBig > thead td:nth-child(1)').innerHTML = 'Календарь на ' + parseFloat(parseFloat(year)-1) + ' год';
document.querySelector('#calendarBig > thead td:nth-child(3)').innerHTML = 'Календарь на ' + parseFloat(parseFloat(year)+1) + ' год';

// абзац создаёт сообщения
for (var k = 1; k <= document.querySelectorAll('#calendarTable div').length; k++) {
  var myD = document.querySelectorAll('#calendarBig table td'),
      my = document.querySelector('#calendarTable div:nth-child(' + [k] + ')');
  for (var i = 0; i < myD.length; i++) {
    if (my.dataset.yyyy) {
      if (myD[i].innerHTML == my.dataset.dd && myD[i].parentNode.parentNode.parentNode.dataset.m == (my.dataset.mm - 1) && year == my.dataset.yyyy) {
        myD[i].title = my.dataset.text;
        if (my.dataset.link) {
          myD[i].innerHTML = '<a href="' + my.dataset.link + '" target="_blank">' + myD[i].innerHTML + '</a>';
        }
      }
    }else{
      if (myD[i].innerHTML == my.dataset.dd && myD[i].parentNode.parentNode.parentNode.dataset.m == (my.dataset.mm - 1)) {
        myD[i].title = my.dataset.text;
        if (my.dataset.link) {
          myD[i].innerHTML = '<a href="' + my.dataset.link + '" target="_blank">' + myD[i].innerHTML + '</a>';
        }
      }
    }
  }
}

}}

calendarBig(new Date().getFullYear());
document.querySelector('#calendarBig > thead td:nth-child(1)').onclick = calendarBigG;
document.querySelector('#calendarBig > thead td:nth-child(3)').onclick = calendarBigG;
function calendarBigG() {calendarBig(this.innerHTML.replace(/[^\d]/gi, ''));}

</script>     
      
<footer>&copy; Все права защищены</footer>
</body>
</html>
