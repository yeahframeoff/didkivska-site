<?php
session_start();
?>
<link rel="stylesheet" href="webstyle.css">

<html>
<head>
    <meta charset="utf-8"></meta>
</head>
<body>
<div id="header">
<div id="logo">
<img src="purchase_order.png">
</div>
	<h1>Manage it!</h1>
	<h3><span>Легкий</span> та <span>зручний</span> спосіб<br> керування проектами та відстежування їх виконанням.</h3>
</div>
<div id="main_part">
<h2>Почати просто. Зареєструйся зараз!</h2>

<form id="register" action="logg.php" method="post">
   <input type="text" name="login" value='Login' id="textbox"><br/> 
   <input type="password" name="password" value='admin' id="textbox"><br/> 
   <input type="submit" value="Увійти" name="log"></input>
   <a class="first after" href="Register.php">Реєстрація</a> 
</form>
</div>
</body>
</html>
