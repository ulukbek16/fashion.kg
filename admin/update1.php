  <?php

require_once "../database.php";
require_once "../function.php";


$sql = "UPDATE `tour` SET title='$title', image='$image', price='$price', content='$content' WHERE id='$id'";
mysqli_query($update_sql) or die("Ошибка вставки" . mysqli_error());
echo '<p>Запись успешно обновлена!</p>';

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin панель</title>
</head>
<body>
<?php 
require_once "../block/menu.php";
//  if ($success) {
//     echo "Тур успешно добавлен";
//     $success = false;
// }
// elseif (isset($_POST["button"])) echo "Тур не добавлен";
 
?>
<div>
<p>Добавить тур</p>
<table>
  <tr>
      <td>
     


      

      </td>

  </tr>  

</table>
</div>
</body>
</html>