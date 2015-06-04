<?php include "123.php" ?>
<?php
	session_start();
?>
<link rel="stylesheet" href="project_profile.css">
<meta charset="utf-8">
<section id="main_sec">
<div id="picture_sec">
<br><br>
<img src="project.png">
</div>

<?php

include('db_login.php');  
          if (!$db_select) {
          echo 'Choo choo database';
              die("Unable to choose the database: <br />". mysql_error());
          }
         mysql_query("SET NAMES utf8");
         $query = "SELECT * FROM projects WHERE id='".$_GET['id']."'";
		 $data = mysql_query($query);
		 if (!$data) {
		  echo 'Choo choo query';
              die("Wow! Something wrong with your query: <br />". mysql_error());
          }
          
          $myrow = mysql_fetch_array($data);
          
          echo '<h2>'.$myrow[0].'</h2>';
          ?>
          <div id="title_h3">
                    </div>
         
<div id="p_text">
<?php
echo '<p>'.$myrow[3].'</p>';
?>
</div>
 <div id="project_info">

<?php
echo '<h3>Загальна сума:</h3>';
echo'<p>'.$myrow[1].'$</p>';
echo '<h3>Було надіслано:</h3>';
echo'<p>'.$myrow[2].'</p>';
echo '<h3>Статус:</h3>';
echo'<p>'.$myrow[7].'</p>';
echo '<h3>Готовність:</h3>';
echo'<p>'.$myrow[9].'%</p>';
?>
<form method="post" action="<?php echo $_SERVER['PHP-SELF'];?>">
<input id="submit" type="submit" value="Видалити" name="deletion">
</form>
</div>
<?php
if($_POST["deletion"])
	{
	
	mysql_query("SET NAMES utf8");
	$query_del = "DELETE FROM projects WHERE id=".$_GET['id'].""; 			
	mysql_query($query_del);
	echo'<script language="JavaScript"> 
 window.location.href = "Projects.php"
</script>';
	
	}
	
?>
</section>
