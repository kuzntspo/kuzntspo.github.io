<?php
include "database.php";
// Выводим результат из БД
$sql = mysqli_query($connect, 'SELECT * FROM `Words`');
  while ($result = mysqli_fetch_array($sql)) {
	echo '<tr>'.'<td>' .$result['Word'].'</td>'.'<td>'. $result['Definition'].'</td>'.'</tr>';
  }
?>