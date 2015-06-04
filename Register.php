<html>
<body>
<link rel="stylesheet" href="with header.css">
<section id="main_sec">
<div id="picture_sec">
<img src="star.png">
</div>
<h2>Реєструйся зараз!</h2>
<p>Просто внеси свою інформацію в поля нижче.<br><span>Легше не буває.</span></p>
<div id="envelope">
<form action="" method="post" id="project_form">
<label>Ім'я</label>
<input name="username" placeholder="Input name here" type="text" width="100px;" id="input_from"><br/>
<label></label>
<label>Телефон</label>
<input name="phone" placeholder="0631234567" type="text" width="100px;" id="input_from"><br/>
<label></label>
<label>Логін</label>
<input name="userlogg" placeholder="Input login here" type="text" width="100px;" id="input_from"><br/>
<label></label>
<label>Пароль</label>
<input name="userpass" placeholder="Input password here" type="password" width="100px;" id="input_from"><br/>
<label></label>

<input id="submit" type="submit" value="Реєстрація" name="register">
</form>
</div>  

<?php
include('/Applications/MAMP/htdocs/db_login.php');  
if (!$db_select) {
          echo 'Choo choo database';
              die("Unable to choose the database: <br />". mysql_error());
          }
          
          if($_POST["register"])
		{
         mysql_query("SET NAMES utf8");
         $query = "INSERT INTO users VALUES ('".$_POST['username']."', 0, 'C', '".$_POST['phone']."')";
         mysql_query($query);
         
         $data = mysql_query("SELECT * FROM users WHERE name='".$_POST['username']."'");
         if (!$data) {
              die("Wow! Something wrong with your query: <br />". mysql_error());
          }
          
          $myrow = mysql_fetch_array($data);
          
         $query2 = "INSERT INTO logpass VALUES ('".$_POST['userlogg']."', '".$_POST['userpass']."', ".$myrow[1].", 0)";
         mysql_query($query2);
         	echo'<script language="JavaScript"> 
 window.location.href = "Start.php"
</script>';
         
         /*$query = "INSERT INTO projects VALUES ('".$_POST['name']."', ".$_POST['sum'].", '".$_POST['date_from']."', '".$_POST['description']."', ".$_SESSION['userid'].", '   ', 0, 'free', 0, 0, '".$_POST['func']."', '".$_POST['unfunc']."', '".$_POST['tech']."')";*/
         /*$query2 = "INSERT INTO projects VALUES ('".$_POST['name']."', ".$_POST['sum'].", '".$_POST['date_from']."', '".$_POST['description']."', ".$_SESSION['userid'].", '   ', 0, 'free', 0, 0, '".$_POST['func']."', '".$_POST['unfunc']."', '".$_POST['tech']."', '2015-03-03', '2015-04-03')";
          mysql_query($query2);*/
		 /*mysql_query($query);*/
		 }
		
?>
</section>

