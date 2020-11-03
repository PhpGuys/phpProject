<?php
echo <<<DT
<!DOCTYPE html>
<html>
<head>

   <title>Календарь событий</title>
     <link href="images/favicon.ico" 
  rel = "shortcut icon" type="image/x-icon">
<style type="text/css">

body{
   background-color: #5291cc;
}

ul{
background-color:#192e69;
color:white; 
list-style-type: none;
margin: 15px;
padding: 15px;
display: flex;

justify-content:center;
border-radius:10px;

box-shadow: 2px 2px 5px #000000;
}

footer{
  background-color:#192e69;
color:white; 
list-style-type: none;
margin-left: 15px;
margin-right: 15px;
margin-top: 5px;
margin-bottom: 5px;
padding: 15px;


display:flex;

justify-content:center;
border-radius:10px;

box-shadow: 2px 2px 5px #000000; 
}


a{
   padding: 50px;
   text-decoration:none;
   font-size: 150%;
font-family: arial,amaze;
   font-weight:bold;
   text-transform: uppercase;
   color: white;
   text-shadow: 2px 2px 7px #111111;
}

a:hover{
color: #FF8C00;

}

main{
margin: 15px;
padding: 35px;
border-radius:10px;
   font-size: 115%;
opacity: 0.9;
box-shadow: 2px 2px 20px #000000;
background-color: #F0FFF0;
}

.six_month{
   display:flex;
   justify-content: center;
}

caption{
      background-color:    #8A2BE2;
padding: 5px;
   color: white;

font-family: ARIAL BLACK;
}

table{
   padding: 20px;
text-align: center;
font-size: 83%;
border: solid 1px grey;
background-color:#F0F8FF;
}

th, td {border: 1px solid grey;padding: 5px;box-shadow: 0.4px 0.4px 4px #000000; border-radius: 8px;}

td{background-color: white;}
th{background-color: #FFFAF0;}

#Data{
   text-align: center;
   font-size: 120%;

}

td:hover{
   background-color: #006400;
   color: white;
border: 1px solid #006400;
   font-weight:bold; 
   cursor: pointer;
}

.logo {
  display: flex; 
   background-color: #1d182e;
justify-content: flex-start;
  height: 100px;
margin: -8px;
}

.logo > .logo__link {
  margin-left: 20px;
  margin-top: -40px; 
}

.logo > .logo__headline {
  font-size: 40px;
  font-weight: bold;
  font-family: 'Courier New', Courier, monospace;
  color: white;
  margin-top: 30px;
  margin-left: -10px;
}

.Form_Data{
 padding-top: 5px;
 display: flex;
}
.clockpage
{
  margin-left: auto;
  margin-right: 23px;
    margin-top:10px;
    margin-bottom: 10px;
    background: white;
    text-align: center;
    font-family: 'Titillium Web', sans-serif;
    font-size: 30px;
    padding: 10px;
    font-weight: bold;
    border-top: 10px solid #55c49f;
    border-radius: 5px;

}

#dayOfWeek
{
    display: block;
   font-size: 20px;
}

#Data{
text-align: center;
}

.INP{
   font-size: 200%;
   text-align: center;
   font-weight: bold;
   background-color: #191970;
   color: white;
border: solid 3px white;
box-shadow: 1px 1px 20px #000000;
    border-radius: 15px;
    outline: none;
}


@media only screen and (max-width: 1830px) {
   .calendar, .Form_Data{
      justify-content: center;
      text-align: center;
   }
 .six_month{
    display: inline-table;
   font-size: 150%;


 }
#Data{
    font-size: 90%;
    }
    #dayOfWeek{
     font-size: 50%;
   }
}

@media only screen and (max-width: 950px){
a{
   font-size: 120%;
}
ul{
   display:grid;
   text-align: center;
   justify-content: center;
}
}




</style>


</head>
 <body onload="clockTimer();">
      <header>
<div class="logo">
    <a class="logo__link" href="#">
      <img src="images/logo.png" alt="logo" width="80" height="80">
    </a>
    <div class="logo__headline"> Portal</div>
         <div class="clockpage">
            <span id="clock"></span>
            <span id="dayOfWeek"></span>          
        </div>
</div>
            <nav>
               <ul>
                  <li><a href="#">На главную</a></li>
                  <li><a href="#">Профиль</a></li>
                  <li><a href="#">Активные события</a></li>
               </ul>
            </nav>
      </header>
   <div id="Data">
      <form>
         <input type="button" name="minus" value="<<" class="INP" >
         <input type="number" name="year" min="2020" max="2040" step="1" value="2020"style="font-size: 200%; text-align: center; font-weight: bold;">
         <input type="button" name="plus" value=">>" class="INP">    
      </form>
   </div>
<main class="calendar">
<div class="six_month">
<table>
   <caption>Январь</caption>
      <tr>
         <th>ПН</th>
         <th>ВТ</th>
         <th>СР</th>
         <th>ЧТ</th>
         <th>ПТ</th>
         <th style="color: red">СБ</th>
         <th style="color: red">ВС</th>
      </tr>
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
      </tr>
      <tr>
         <td>8</td>
         <td>9</td>
         <td>10</td>
         <td>11</td>
         <td>12</td>
         <td>13</td>
         <td>14</td>
      </tr>
      <tr>
         <td>15</td>
         <td>16</td>
         <td>17</td>
         <td>18</td>
         <td>19</td>
         <td>20</td>
         <td>21</td>
      </tr>
      <tr>
         <td>22</td>
         <td>23</td>
         <td>24</td>
         <td>25</td>
         <td>26</td>
         <td>27</td>
         <td>28</td>
      </tr>
      <tr>
         <td>29</td>
         <td>30</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
</table>

<table>
   <caption>Февраль</caption>
      <tr>
         <th>ПН</th>
         <th>ВТ</th>
         <th>СР</th>
         <th>ЧТ</th>
         <th>ПТ</th>
         <th style="color: red">СБ</th>
         <th style="color: red">ВС</th>
      </tr>
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
      </tr>
      <tr>
         <td>8</td>
         <td>9</td>
         <td>10</td>
         <td>11</td>
         <td>12</td>
         <td>13</td>
         <td>14</td>
      </tr>
      <tr>
         <td>15</td>
         <td>16</td>
         <td>17</td>
         <td>18</td>
         <td>19</td>
         <td>20</td>
         <td>21</td>
      </tr>
      <tr>
         <td>22</td>
         <td>23</td>
         <td>24</td>
         <td>25</td>
         <td>26</td>
         <td>27</td>
         <td>28</td>
      </tr>
      <tr>
         <td>29</td>
         <td>30</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
</table>
<table>
   <caption>Март</caption>
      <tr>
         <th>ПН</th>
         <th>ВТ</th>
         <th>СР</th>
         <th>ЧТ</th>
         <th>ПТ</th>
         <th style="color: red">СБ</th>
         <th style="color: red">ВС</th>
      </tr>
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
      </tr>
      <tr>
         <td>8</td>
         <td>9</td>
         <td>10</td>
         <td>11</td>
         <td>12</td>
         <td>13</td>
         <td>14</td>
      </tr>
      <tr>
         <td>15</td>
         <td>16</td>
         <td>17</td>
         <td>18</td>
         <td>19</td>
         <td>20</td>
         <td>21</td>
      </tr>
      <tr>
         <td>22</td>
         <td>23</td>
         <td>24</td>
         <td>25</td>
         <td>26</td>
         <td>27</td>
         <td>28</td>
      </tr>
      <tr>
         <td>29</td>
         <td>30</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
</table>
<table>
   <caption>Апрель</caption>
      <tr>
         <th>ПН</th>
         <th>ВТ</th>
         <th>СР</th>
         <th>ЧТ</th>
         <th>ПТ</th>
         <th style="color: red">СБ</th>
         <th style="color: red">ВС</th>
      </tr>
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
      </tr>
      <tr>
         <td>8</td>
         <td>9</td>
         <td>10</td>
         <td>11</td>
         <td>12</td>
         <td>13</td>
         <td>14</td>
      </tr>
      <tr>
         <td>15</td>
         <td>16</td>
         <td>17</td>
         <td>18</td>
         <td>19</td>
         <td>20</td>
         <td>21</td>
      </tr>
      <tr>
         <td>22</td>
         <td>23</td>
         <td>24</td>
         <td>25</td>
         <td>26</td>
         <td>27</td>
         <td>28</td>
      </tr>
      <tr>
         <td>29</td>
         <td>30</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
</table>
<table>
   <caption>Май</caption>
      <tr>
         <th>ПН</th>
         <th>ВТ</th>
         <th>СР</th>
         <th>ЧТ</th>
         <th>ПТ</th>
         <th style="color: red">СБ</th>
         <th style="color: red">ВС</th>
      </tr>
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
      </tr>
      <tr>
         <td>8</td>
         <td>9</td>
         <td>10</td>
         <td>11</td>
         <td>12</td>
         <td>13</td>
         <td>14</td>
      </tr>
      <tr>
         <td>15</td>
         <td>16</td>
         <td>17</td>
         <td>18</td>
         <td>19</td>
         <td>20</td>
         <td>21</td>
      </tr>
      <tr>
         <td>22</td>
         <td>23</td>
         <td>24</td>
         <td>25</td>
         <td>26</td>
         <td>27</td>
         <td>28</td>
      </tr>
      <tr>
         <td>29</td>
         <td>30</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
</table>
<table>
   <caption>Июнь</caption>
      <tr>
         <th>ПН</th>
         <th>ВТ</th>
         <th>СР</th>
         <th>ЧТ</th>
         <th>ПТ</th>
         <th style="color: red">СБ</th>
         <th style="color: red">ВС</th>
      </tr>
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
      </tr>
      <tr>
         <td>8</td>
         <td>9</td>
         <td>10</td>
         <td>11</td>
         <td>12</td>
         <td>13</td>
         <td>14</td>
      </tr>
      <tr>
         <td>15</td>
         <td>16</td>
         <td>17</td>
         <td>18</td>
         <td>19</td>
         <td>20</td>
         <td>21</td>
      </tr>
      <tr>
         <td>22</td>
         <td>23</td>
         <td>24</td>
         <td>25</td>
         <td>26</td>
         <td>27</td>
         <td>28</td>
      </tr>
      <tr>
         <td>29</td>
         <td>30</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
</table>
</div>

<div class="six_month">
<table>
   <caption>Июль</caption>
      <tr>
         <th>ПН</th>
         <th>ВТ</th>
         <th>СР</th>
         <th>ЧТ</th>
         <th>ПТ</th>
         <th style="color: red">СБ</th>
         <th style="color: red">ВС</th>
      </tr>
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
      </tr>
      <tr>
         <td>8</td>
         <td>9</td>
         <td>10</td>
         <td>11</td>
         <td>12</td>
         <td>13</td>
         <td>14</td>
      </tr>
      <tr>
         <td>15</td>
         <td>16</td>
         <td>17</td>
         <td>18</td>
         <td>19</td>
         <td>20</td>
         <td>21</td>
      </tr>
      <tr>
         <td>22</td>
         <td>23</td>
         <td>24</td>
         <td>25</td>
         <td>26</td>
         <td>27</td>
         <td>28</td>
      </tr>
      <tr>
         <td>29</td>
         <td>30</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
</table>

<table>
   <caption>Август</caption>
      <tr>
         <th>ПН</th>
         <th>ВТ</th>
         <th>СР</th>
         <th>ЧТ</th>
         <th>ПТ</th>
         <th style="color: red">СБ</th>
         <th style="color: red">ВС</th>
      </tr>
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
      </tr>
      <tr>
         <td>8</td>
         <td>9</td>
         <td>10</td>
         <td>11</td>
         <td>12</td>
         <td>13</td>
         <td>14</td>
      </tr>
      <tr>
         <td>15</td>
         <td>16</td>
         <td>17</td>
         <td>18</td>
         <td>19</td>
         <td>20</td>
         <td>21</td>
      </tr>
      <tr>
         <td>22</td>
         <td>23</td>
         <td>24</td>
         <td>25</td>
         <td>26</td>
         <td>27</td>
         <td>28</td>
      </tr>
      <tr>
         <td>29</td>
         <td>30</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
</table>
<table>
   <caption>Сентябрь</caption>
      <tr>
         <th>ПН</th>
         <th>ВТ</th>
         <th>СР</th>
         <th>ЧТ</th>
         <th>ПТ</th>
         <th style="color: red">СБ</th>
         <th style="color: red">ВС</th>
      </tr>
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
      </tr>
      <tr>
         <td>8</td>
         <td>9</td>
         <td>10</td>
         <td>11</td>
         <td>12</td>
         <td>13</td>
         <td>14</td>
      </tr>
      <tr>
         <td>15</td>
         <td>16</td>
         <td>17</td>
         <td>18</td>
         <td>19</td>
         <td>20</td>
         <td>21</td>
      </tr>
      <tr>
         <td>22</td>
         <td>23</td>
         <td>24</td>
         <td>25</td>
         <td>26</td>
         <td>27</td>
         <td>28</td>
      </tr>
      <tr>
         <td>29</td>
         <td>30</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
</table>
<table>
   <caption>Октябрь</caption>
      <tr>
         <th>ПН</th>
         <th>ВТ</th>
         <th>СР</th>
         <th>ЧТ</th>
         <th>ПТ</th>
         <th style="color: red">СБ</th>
         <th style="color: red">ВС</th>
      </tr>
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
      </tr>
      <tr>
         <td>8</td>
         <td>9</td>
         <td>10</td>
         <td>11</td>
         <td>12</td>
         <td>13</td>
         <td>14</td>
      </tr>
      <tr>
         <td>15</td>
         <td>16</td>
         <td>17</td>
         <td>18</td>
         <td>19</td>
         <td>20</td>
         <td>21</td>
      </tr>
      <tr>
         <td>22</td>
         <td>23</td>
         <td>24</td>
         <td>25</td>
         <td>26</td>
         <td>27</td>
         <td>28</td>
      </tr>
      <tr>
         <td>29</td>
         <td>30</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
</table>
<table>
   <caption>Ноябрь</caption>
      <tr>
         <th>ПН</th>
         <th>ВТ</th>
         <th>СР</th>
         <th>ЧТ</th>
         <th>ПТ</th>
         <th style="color: red">СБ</th>
         <th style="color: red">ВС</th>
      </tr>
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
      </tr>
      <tr>
         <td>8</td>
         <td>9</td>
         <td>10</td>
         <td>11</td>
         <td>12</td>
         <td>13</td>
         <td>14</td>
      </tr>
      <tr>
         <td>15</td>
         <td>16</td>
         <td>17</td>
         <td>18</td>
         <td>19</td>
         <td>20</td>
         <td>21</td>
      </tr>
      <tr>
         <td>22</td>
         <td>23</td>
         <td>24</td>
         <td>25</td>
         <td>26</td>
         <td>27</td>
         <td>28</td>
      </tr>
      <tr>
         <td>29</td>
         <td>30</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
</table>
<table>
   <caption>Декабрь</caption>
      <tr>
         <th>ПН</th>
         <th>ВТ</th>
         <th>СР</th>
         <th>ЧТ</th>
         <th>ПТ</th>
         <th style="color: red">СБ</th>
         <th style="color: red">ВС</th>
      </tr>
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
         <td>4</td>
         <td>5</td>
         <td>6</td>
         <td>7</td>
      </tr>
      <tr>
         <td>8</td>
         <td>9</td>
         <td>10</td>
         <td>11</td>
         <td>12</td>
         <td>13</td>
         <td>14</td>
      </tr>
      <tr>
         <td>15</td>
         <td>16</td>
         <td>17</td>
         <td>18</td>
         <td>19</td>
         <td>20</td>
         <td>21</td>
      </tr>
      <tr>
         <td>22</td>
         <td>23</td>
         <td>24</td>
         <td>25</td>
         <td>26</td>
         <td>27</td>
         <td>28</td>
      </tr>
      <tr>
         <td>29</td>
         <td>30</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
</table>
</div>

      <form class="Form_Data">
         
         <input type="date" name="calendar" min="2020-10-10" max="2040-05-20">
         <input type="submit" value="Ввести">
      
      </form>
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
        

    
   
        
<footer>&copy; Все права защищены</footer>
</body>
</html>
DT
?>;