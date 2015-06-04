<?php include "123.php" ?>
<?php
	session_start();
?>
<?php header("Content-type: text/html; Charset=utf-8"); ?>
<link rel="stylesheet" href="projects.css">
<section id="main_sec">
<div id="picture_sec">
<br><br>
<img src="projects.png">
</div>
<h2>Проекти</h2>
<p>Тут можна переглянути інформацію про поточні проекти. <br><span>Легке та зручне керування.</span></p>
<div id="visual">

<table cellspacing='0'> <!-- cellspacing='0' is important, must stay -->
	<tr><th>Назва</th><th>Дата початку</th><th>Готовність,%</th></tr><!-- Table Header -->
	
	<?php
		
		
		include('db_login.php');  

          if (!$db_select) {
          echo 'Choo choo database';
              die("Unable to choose the database: <br />". mysql_error());
          }
         
		 $data = mysql_query("SELECT * FROM projects WHERE clientid='".$_SESSION['userid']."'");
		 if (!$data) {
		  echo 'Choo choo query';
              die("Wow! Something wrong with your query: <br />". mysql_error());
          }
          
         /*$myrow = mysql_fetch_array($data);*/
         
         while ($result_row = mysql_fetch_row(($data))) //results visualisation
          	  {
          	    //print_r($result_row);
          	  	echo '<tr><td><a href="Project.php?id='.$result_row[6].'">'.$result_row[0].'</a></td><td>'.$result_row[2].'</td><td>'.$result_row[9].'%</td></tr>';
              }

         

	?>
	
</table>
</div>


</section>
