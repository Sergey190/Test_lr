<?php
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
  <a href="index.php" class="logo">Лабораторная работа №3</a>
  <nav>

    <a class="active" href="index.php">Главная</a>
    
      <a class="active" href="avrorized.php">Регистрация/Авторезация</a>
 
    
  </nav>
</header>

<br>
<br>




<?php

include("include/block-content.php");

?>

<?php

include("include/block-footer.php");

?>

</body>
</html>