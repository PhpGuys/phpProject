
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
<?php 
// проверяем передали ли нам месяц и год
if(isset($_GET["ym"])){

  $year  = (int)substr($_GET["ym"], 0, 4);
  $month = (int)substr($_GET["ym"], 4, 2);

}
else{ // иначе выводить текущие месяц и год

  $month = date("m", mktime(0,0,0,date('m'),1,date('Y')));
  $year  = date("Y", mktime(0,0,0,date('m'),1,date('Y')));

}

$skip          = date("w", mktime(0,0,0,$month,1,$year)) - 1; // узнаем номер дня недели
if($skip < 0){ 
  $skip = 6; 
}
$daysInMonth   = date("t", mktime(0,0,0,$month,1,$year));       // узнаем число дней в месяце
$calendar_head = '';    // обнуляем calendar head
$calendar_body = '';    // обнуляем calendar boday
$day = 1;       // для цикла далее будем увеличивать значение
$authorOfEvent  = user_firstname()." ".user_lastname();
$eventfeedName = get_eventfeedNameByAuthor($authorOfEvent);

for($i = 0; $i < 6; $i++){ // Внешний цикл для недель 6 с неполыми

  $calendar_body .= '<tr>';       // открываем тэг строки
  for($j = 0; $j < 7; $j++){      // Внутренний цикл для дней недели
    $message = getEvent($day, $month, $year, $eventfeedName, $authorOfEvent);
    $status;

    if ($message == false){
      $status = 'day';
    }
    else{
      $status = 'event';
    }
          if(($skip > 0)or($day > $daysInMonth)){ // выводим пустые ячейки до 1 го дня ип после полного количства дней
          
                  $calendar_body .= '<td class="none"></td>'; 
                  $skip--;

          }
          else{
                  
                  if($j == 0) {     // если воскресенье то омечаем выходной
                        $calendar_body .= '<td class="'.$status.'"><span title="'.$message.'">'.$day.'</span></td>';
                  }  
                  else{   // в противном случае просто выводим день в ячейке
                          if ((date($j)==$day)&&(date($m)==$month)&&(date('Y')==$year)){//проверяем на текущий день
                                  $calendar_body .= '<td class="'.$status.'"><span title="'.$message.'">'.$day.'</span></td>';
                          }       
                          else{ 
                                  $calendar_body .= '<td class="'.$status.'"><span title="'.$message.'">'.$day.'</span></td>';
                             }
                           }
                  $day++; // увеличиваем $day
          }
          
  }
  $calendar_body .= '</tr>'; // закрываем тэг строки
}

// заголовок календаря
$calendar_head = '
<tr>          
  <th colspan="2"><a href="?ym='.date("Ym", mktime(0,0,0,$month-1,1,$year)).'">« Пред</a></th>
  <th colspan="3">'.date("F, Y", mktime(0,0,0,$month,1,$year)).'</th>
  <th colspan="2"><a href="?ym='.date("Ym", mktime(0,0,0,$month+1,1,$year)).'">След »</a></th>
</tr>

<th>Понедельник</th>
<th>Вторник</th>
<th>Среда</th>
<th>Четверг</th>
<th>Пятница</th>
<th>Суббота</th>
<th>Воскресенье</th>
</tr>'; 
?>
<table id="calendar" width="710" border="1" cellspacing="0" cellpadding="5">
        <thead>
                <?php echo $calendar_head; ?>
        </thead>
        <tbody>
                <?php echo $calendar_body; ?>
        </tbody>
</table>

<h3>Добавить событие</h3>
      <form class="Form_Data" method="post" action="add_event.php">
       
         <input type="date" name="calendar" min="2020-10-10" max="2080-05-20">
         <input type="text" placeholder="Заголовок" name="title">
         <textarea placeholder="Описание" name="text">

         </textarea>
         <button type="submit">Добавить</button>
        
      </form>
      <h3>Удалить событие</h3>
      <form class="Form_Data" method="post" action="delete_event.php">
       
         <input type="date" min="2020-10-10" max="2080-05-20" name="calendar_delete">
         <input type="text" placeholder="Заголовок" name="title_delete" >
         <button type="submit">Удалить</button>

      </form>

      <br style="background-color: #5291cc; border-radius: 4px;">
      <h3>Добавить пользователя</h3>
      <form class="Form_Data" method="post" action="add_user.php">
         <input type="text" placeholder="Эл.почта пользователя" name="email_contr">
         <button type="submit">Добавить</button>
      </form>
      <h3>Удалить пользователя</h3>
      <form class="Form_Data" method="post" action="delete_user.php">
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

      
<footer>&copy; Все права защищены</footer>
</body>
</html>
