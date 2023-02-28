  <?php

require_once "../database.php";
require_once "../function.php"; 
if(isset($_POST["button"]))
{
  $success = uptour($_POST htmlspecialchars($_POST["title"]),$_POST["image"],$_POST["price"],$_POST["content"]);
}
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
    <form name="tour" method="post" action="" style="margin-left: 399px;">
           <label>Название тура:</label><br><input type="text" name="title" value="<?=$tr['title']?>"><br>
            <label>Картинка ссылка</label> <br><input type="text" name="image" value="<?=$tr['image']?>"><br>
             <label>Цена</label> <br><input type="text" name="price"><br>
              <label>Описание</label><br><textarea name="content" cols="40" rows="10"></textarea><br>
              <input type="submit" name="button" value="Отправить"> 

        </form>

      

      </td>
  

  </tr>  

</table>
</div>
</body>
</html>