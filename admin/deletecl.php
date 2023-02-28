<?php 
require_once "../database.php";
require_once "../function.php";

$id = $_GET["id"];
deletecl($id);
header ("location: client.php");

function deletecl($id){
 global $link;
 $sql= "DELETE FROM `clients` WHERE id = $id";
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