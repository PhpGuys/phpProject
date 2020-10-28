<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Project</title>
  <link href="images/favicon.ico" 
  rel = "shortcut icon" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
  <script type="text/javascript"> 
  $(function() { 
  $(window).scroll(function() {
  if($(this).scrollTop() != 0) {
  $('#top').fadeIn();
  } else { 
  $('#top').fadeOut();
  } 
  }); 
  $('#top').click(function() { 
  $('body,html').animate({scrollTop:0},1000);
  }); 
  }); 
  </script>


</head>
<body>
<header class="header">
<div class="logo">
    <a class="logo__link" href="#">
      <img class="logo__link-img" src="images/logo.png" alt="logo" width="80" height="80">
    </a>
    <div class="logo__headline"> Events</div>
   
  </div>
  <button class="btn-login"><a class="btn-login__link" href="login.php">Войти</a></button>
</header>
<section class="head-nav">
  <a  href="index.php">Главная</a>
  <a href="articles.php">Новости</a>
  <a href="articles.php">Статьи</a>
  <a href="articles.php">О нас</a>
  <a href = "profile.php">Профиль</a>
</section>
