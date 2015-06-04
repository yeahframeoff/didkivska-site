<?php 
session_start();

if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

/*---------------------------------------- Problems with fields ----------------------------------*/

if (empty($login) or empty($password)) {
	   echo'<script language="JavaScript"> 
 window.location.href = "Error.php"
</script>';
}
/*-------------------------------------------------------------------------------*/



$login = trim(stripslashes(htmlspecialchars($login)));
$password = trim(stripslashes(htmlspecialchars($password)));

echo $login, $password;


/*_______________________   CONNECTING TO DATABASE    _____________________________*/

include('db_login.php');  

  if (!$connection) 
	  {
	   
	   die("Unable to connect to database: <br />". mysql_error());
	          
	  }
	  else{
		  echo 'Nice to meet you, database!';
	  }

          if (!$db_select) {
              die("Unable to choose the database: <br />". mysql_error());
          }
          else{
		  echo 'Nice to meet you, database!';
	  }
	  
/*-------------------------------------------------------------------------------*/




/*_______________________   SQL QUERIES    _____________________________*/

$data = mysql_query("SELECT * FROM logpass WHERE login='".$login."' AND password='".$password."'");
if (!$data) {
              die("Wow! Something wrong with your query: <br />". mysql_error());
          }

/*$query1 = "INSERT INTO logpass VALUES ('Pp', 0234, 1, 2)"; //inserton
          mysql_query($query1);*/

$myrow = mysql_fetch_array($data);

	if ($myrow['Password']==$password && $myrow['Login']==$login) {
	$_SESSION['login']=$myrow['Login']; 
	$_SESSION['userid']=$myrow['UserID'];
	
	include("Projects.php");
	
	/*echo "You're logged in as ".$login.". <br><br> <a href='Projects.php'>Go to projects</a><br />";*/
	
	}
   else {
   //если пароли не сошлись
   echo'<script language="JavaScript"> 
 window.location.href = "Error.php"
</script>';
	
   }
      

/*-------------------------------------------------------------------------------*/
?>