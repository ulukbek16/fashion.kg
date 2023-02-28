<?php
function get_tour(){
global $link;
$sql="SELECT * FROM `tour`";
$result=mysqli_query($link, $sql);
$tour=mysqli_fetch_all($result, MYSQLI_ASSOC);
return $tour;
}
function get_client(){
global $link;
$sql="SELECT * FROM `clients`";
$result=mysqli_query($link, $sql);
$client=mysqli_fetch_all($result, MYSQLI_ASSOC);
return $client;
}
function get_tour_id($tr_id){
	global $link;
	$sql="SELECT * FROM tour WHERE id = ".$tr_id;
	$result=mysqli_query($link, $sql);
	$tr = mysqli_fetch_assoc($result);
	return $tr;

}
function addtour($title,$image,$price,$content){
 global $link;
 $sql=("INSERT INTO `tour` (`title`,`image`,`price`,`content`) VALUES ('$title','$image','$price','$content')");
 $result=mysqli_query($link,$sql);
 return $sql;

}
function uptour($title,$image,$price,$content){
 global $link;
 $sql=("UPDATE `tour` SET title='$title', image='$image', price='$price', content='$content' WHERE id='$id'");
 $result=mysqli_query($link,$sql);
 return $sql;}
function addcl($title,$phone,$email){
 global $link;
 $sql=("INSERT INTO `clients` (`title`,`phone`,`email`) VALUES ('$title','$phone','$email')");
 $result=mysqli_query($link,$sql);
 return $sql;

}

function updatetour($title,$image,$price,$content){
 global $link;
 $sql=("UPDATE `tour` SET `title`,`image`,`price`,`content` ) VALUES ('$title','$image','$price','$content')");
 $result=mysqli_query($link,$sql);
 return $sql;

}

// function deletetour($id){
//  global $link;
//  $sql= "DELETE FROM `tour` WHERE id = $id";
// mysql_query($sql) or die (mysql_error());

// }

function get_about(){
global $link;
$sql="SELECT * FROM `about`";
$result=mysqli_query($link, $sql);
$about=mysqli_fetch_all($result, MYSQLI_ASSOC);
return $about;
}









?>