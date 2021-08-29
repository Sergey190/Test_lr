
<table class="table_dark">

<tbody>

<tr>

<td>ID;</td>

<td>Название книги</td>

<td>Автор</td>

<td>Год</td>


</tr>

<?php

$sdd_db_host="localhost";

$sdd_db_name="zz";

$sdd_db_user="Gar";

$sdd_db_pass="123456";

@mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);

@mysql_select_db($sdd_db_name);

$result=mysql_query("SELECT * FROM `lr21`");

while ($row=mysql_fetch_array($result))

{ // выводим данные

echo "<tr>\n<td>".$row["id"]."</td>"."\n"."<td>"."".$row["Name"]."

</td>"."\n"."<td>"."".$row["Avtor"]."</td>"."\n"."<td>"."".$row["Year"]."</td>"."\n"."</tr>"."\n";

}
 

?>

</tbody>

</table>


<style type="text/css">
  



.table_dark {
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
  width: 640px;
  text-align: left;
  border-collapse: collapse;
  background: #252F48;
  margin: 10px;
}
.table_dark th {
  color: #EDB749;
  border-bottom: 1px solid #37B5A5;
  padding: 12px 17px;
}
.table_dark td {
  color: #CAD4D6;
  border-bottom: 1px solid #37B5A5;
  border-right:1px solid #37B5A5;
  padding: 7px 17px;
}
.table_dark tr:last-child td {
  border-bottom: none;
}
.table_dark td:last-child {
  border-right: none;
}
.table_dark tr:hover td {
  text-decoration: underline;
}

</style>