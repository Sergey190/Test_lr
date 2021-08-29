<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])

?>
<!DOCTYPE html>
<html>
<head>
<title>Админ панель</title>
<meta charset="utf-8">
</head>
<body>
	<h3>Админ панль</h3>
	<br>
<form action="newart.php" method="post">
<p>Название Автора:</p>
<input name="nameart">
<p>Название книги:</p>
<input name="nameart">
<p>Год:</p>
<input name="nameart">

<input type="submit" value="Добавить данные">
</form>


<h3>Редакто  flashxml 	Tag cloud </h3>

<form>
	<p>Title</p>
	<input name="nameart">
<p>Укажите цвет фона: <input type="color" name="bg" value="#ff0000">
   <input type="submit" value="Выбрать"></p>

<input type="submit" value="Добавить ">
</form>
</body>
</html>