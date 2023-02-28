<?php 

include "../database.php";
include "../function.php"; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>Модная одежда</title>
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
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

     

  <section id="middle" class="grey_section">
        <div class="container">
            <div class="row">
            <a href="client.php" style="    float: right;
    margin-right: 14px;
    text-align: center;
    margin-bottom: 13px;
    width: 200px;
    height: 40px;
    background: red;
    padding: 5px;
    font-size: 20px;
    color: #fff;
    border: 2px solid #000;
    border-radius: 5px;">Клиенты</a>
                <div class="col-sm-12 text-center">
                <a href="tour.php" style="float:right;width: 200px;height: 40px;background: red;padding: 5px;font-size: 20px;color:#fff;border:2px solid #000;
                border-radius: 5px;">Добавить Одежду</a><br>
                 

                    <h2 class="block-header">Наши Одежды</h2>
                    
                </div>
            </div>

            <div class="row">
                <ul id="gallery-grid" class="gallery-grid col-sm-12">
                          <?php $tour= get_tour();?>
<?php foreach($tour as $tr): ?>
                    <li>
                        <a href="" data-largesrc="<?=$tr['image']?>" data-title="Project Name 1" data-description="data-description">
                            <img src="<?=$tr['image']?>" alt="" style="width: 263px;height: 184px;"/>
                        </a>
                        <h3><?=$tr['title']?></h3><br>
                       
                       <p style="background:red;border:3px solid #000;font-size: 20px;border-radius: 5px;"><!-- <a href="update.php?tr_id=<?=$tr['id']?>" style="color:#fff;">Редактировать</a><br>  -->
                        <a href="delete.php?id=<?=$tr["id"]?>" style="color:#fff;">Удалить</a>

                        
                        </p>
                    </li>

                   <?php endforeach;?>
                  
                   

                </ul>
            </div>
            <div class="row">
              
            </div>
        </div>
    </section>



<footer>
              
</footer>

    <section id="copyright" class="color_section">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center">
                    &copy; Copyright 2018 - Дом строй
                </div>
            </div>

        </div>
    </section>
 

    

        <script src="js/vendor/jquery-1.11.1.min.js"></script>
        <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/placeholdem.min.js"></script>
        <script src="js/vendor/hoverIntent.js"></script>
        <script src="js/vendor/superfish.js"></script>
        <script src="js/vendor/jquery.actual.min.js"></script>
        <script src="js/vendor/jquery.appear.js"></script>
        <script src="js/vendor/jquerypp.custom.js"></script>
        <script src="js/vendor/jquery.elastislide.js"></script>
        <script src="js/vendor/jquery.flexslider-min.js"></script>
        <script src="js/vendor/jquery.prettyPhoto.js"></script>
        <script src="js/vendor/jquery.easing.1.3.js"></script>
        <script src="js/vendor/jquery.ui.totop.js"></script>
        <script src="js/vendor/jquery.isotope.min.js"></script>
        <script src="js/vendor/jquery.easypiechart.min.js"></script>
        <script src='js/vendor/jflickrfeed.min.js'></script>
        <script src="js/vendor/jquery.sticky.js"></script>
        <script src='js/vendor/owl.carousel.min.js'></script>
        <script src='js/vendor/jquery.nicescroll.min.js'></script>
        <script src='js/vendor/jquery.fractionslider.min.js'></script>
        <script src='js/vendor/jquery.scrollTo-min.js'></script>
        <script src='js/vendor/jquery.localscroll-min.js'></script>
        <script src='js/vendor/jquery.parallax-1.1.3.js'></script>
        <script src='js/vendor/jquery.bxslider.min.js'></script>
        <script src='js/vendor/jquery.funnyText.min.js'></script>
        <script src='js/vendor/jquery.countTo.js'></script>
        <script src="js/vendor/grid.js"></script>
        <script src='twitter/jquery.tweet.min.js'></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>


    </body>
</html>