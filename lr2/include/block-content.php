
<form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#">Почта: <?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>




<h3>Вывод из БД через PDO!</h3>


<table class="table">
  <thead>
    <tr>
 <td>ID;</td>

<td>Название книги</td>

<td>Автор</td>

<td>Год</td>
    </tr>

  </thead>
  <tbody>


<?php 

$stmt = $pdo->query("SELECT * FROM `lr21` ");

$stmt->execute();

if($stmt->rowCount() > 0){

    while($row = $stmt->fetch(PDO::FETCH_BOTH)){
       echo "<tr>\n<td>".$row["id"]."</td>"."\n"."<td>"."".$row["Name"]."

</td>"."\n"."<td>"."".$row["Avtor"]."</td>"."\n"."<td>"."".$row["Year"]."</td>"."\n"."</tr>"."\n";
    }
}
 ?>

</tbody>
</table>



 <style>
      .table {
        width: 70%;
        border-collapse: collapse;
        margin:0px; 
      }
      td, th {
        border: 1px solid #C2C2FF;
        padding: 3px 7px 2px 7px;
      }
      th {
        text-align: left;
        padding: 5px;
        background-color: #9999FF;
        color: #fff;
      }
      tr:hover { background-color: #E0E0FF; }
    
h3{
  color: red;
}

    </style>




<br>





