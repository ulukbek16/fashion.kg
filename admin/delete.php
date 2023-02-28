<?php 
require_once "../database.php";
require_once "../function.php";

$id = $_GET["id"];
deletetour($id);
header ("location: index.php");

function deletetour($id){
 global $link;
 $sql= "DELETE FROM `tour` WHERE id = $id";
mysqli_query($link,$sql) or die (mysqli_error());

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

</div>
</body>
</html>