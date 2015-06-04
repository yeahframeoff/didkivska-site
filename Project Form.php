<?php
session_start();
?>
<html>
<head>
  <link rel="stylesheet" href="with header.css">
  <script type="text/javascript" src="jquery.js"></script>
  <meta charset="utf-8">
</head>
<body>
<?php
	session_start();
?>
<header>

<a href="#" id="logo">Manage it!</a>

<nav>

<a href="#" id="menu-icon"></a>

<ul>

<li><a href="Projects.php">Проекти</a></li>
<li><a href="Project Form.php">+</a></li>

</ul>

</nav>

</header>

<section id="main_sec">
<div id="picture_sec">
<img src="flashlight.png">
</div>
<h2>Створення нового проекту</h2>
<p>Заповни поля для надсилання твого нового проекту. <br><span>Легше, ніж будь-коли.</span></p>
<div id="envelope">
<form action="" method="post" id="project_form">
<label>Назва</label>
<input name="name" placeholder="Ім'я" type="text" width="100px;" id="input_from"><br/>
<label></label>
<label>Дати початку та кінця</label>
<input name="date_from" placeholder="З" class="textbox-n" type="text" onfocus="(this.type='date')"  id="date"> <br/>
<input name="date_to" placeholder="До" class="textbox-n" type="text" onfocus="(this.type='date')"  id="date"> 
<label></label>
<label>Загальна сума</label>
<input name="sum" placeholder="Напиши загальну суму тут" type="text" width="100px;" id="input_from"><br/>
<label></label>
<label>Короткий опис</label>
<textarea cols="15" name="description" placeholder="Коротка інформація про проект" rows="10">
</textarea><br/>
<label>Вимоги</label><br><br>

<div id="DynamicExtraFieldsContainer">
        <div id="addDynamicField">
         
        </div>
        <div class="DynamicExtraField">
            <br>
            <label for="DynamicExtraField">Функціональні вимоги</label>
            
            <br>
            <textarea name="func" cols="150" id="req" placeholder="Функціональні вимоги"></textarea>
        </div>
        <div class="DynamicExtraField">
            <br>
            <label for="DynamicExtraField" >Нефункціональні вимоги</label>
            
            <br>
            <textarea name="unfunc" cols="150" id="req" placeholder="Нефункціональні вимоги"></textarea>
        </div>
        <div class="DynamicExtraField">
            <br>
            <label for="DynamicExtraField">Технічні вимоги</label>
            
            <br>
            <textarea name="tech" cols="150" id="req" placeholder="Технічні вимоги"></textarea>
        </div>
    </div>
<input id="submit" type="submit" value="Надіслати" name="creation">
</form>
</div>  

<?php
include('db_login.php');  
if (!$db_select) {
          echo 'Choo choo database';
              die("Unable to choose the database: <br />". mysql_error());
          }
          
          if($_POST["creation"])
		{
         mysql_query("SET NAMES utf8");
         /*$query = "INSERT INTO projects VALUES ('".$_POST['name']."', ".$_POST['sum'].", '".$_POST['date_from']."', '".$_POST['description']."', ".$_SESSION['userid'].", '   ', 0, 'free', 0, 0, '".$_POST['func']."', '".$_POST['unfunc']."', '".$_POST['tech']."')";*/
         $query2 = "INSERT INTO projects VALUES ('".$_POST['name']."', ".$_POST['sum'].", '".$_POST['date_from']."', '".$_POST['description']."', ".$_SESSION['userid'].", '   ', 0, 'free', 0, 0, '".$_POST['func']."', '".$_POST['unfunc']."', '".$_POST['tech']."', '2015-03-03', '2015-04-03')";
          mysql_query($query2);
		 /*mysql_query($query);*/
		 	echo'<script language="JavaScript"> 
 window.location.href = "Projects.php"
</script>';
		 }
		
?>
</section>

</body>
</html>