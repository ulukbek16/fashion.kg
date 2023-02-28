<?php 
require_once "database.php";
require_once "function.php";

if(isset($_POST["button"]))
{
  $success = addtour($_POST["title"],$_POST["image"],$_POST["price"],$_POST["content"]);
}



?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>Travel Portal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/animations.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css"> 
        <link rel="stylesheet" href="../css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!--[if lt IE 9]>
            <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <section id="middle" class="grey_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                <a href="index.php" style="color:#fff;"><h2 style="background: blue;width: 400px;float: right;height: 50px;padding: 5px;border:3px solid #000;border-radius: 5px;color:#fff;">Посмотреть список туров</h2></a>
                 
                
                    <h2 class="block-header">Добавить тур</h2>
                   
                </div>
            </div>

            <div class="row">
               <p></p>
<table>
  <tr>
      <td style="text-align: center;margin-left: -200px;">
        <form name="tour" method="post" action="" style="margin-left: 399px;">
           <label>Название тура:</label><br><input type="text" name="title"><br>
            <label>Картинка ссылка</label> <br><input type="text" name="image"><br>
             <label>Цена</label> <br><input type="text" name="price"><br>
              <label>Описание</label><br><textarea name="content" cols="40" rows="10"></textarea><br>
              <input type="submit" name="button" value="Отправить"> 

        </form>


      </td>

  </tr>  

</table>
                   

                
            </div>
            <div class="row">
              
            </div>
        </div>
    </section>
<div>


</body>
</html>