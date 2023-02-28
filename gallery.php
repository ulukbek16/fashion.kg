<?php require_once "block/header.php";?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

     <?php require_once "block/menu.php";?>

  <section id="middle" class="grey_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header">Все ОБЪЕКТЫ</h2>
                    <p>all</p>
                </div>
            </div>

            <div class="row">
                <ul id="gallery-grid" class="gallery-grid col-sm-12">
                          <?php $tour= get_tour();?>
<?php foreach($tour as $tr): ?>
                    <li>
                        <a href="blog-single.php?tr_id=<?=$tr['id']?>" data-largesrc="<?=$tr['image']?>" data-title="Project Name 1" data-description="data-description">
                            <img src="<?=$tr['image']?>" alt="" style="width: 263px;height: 184px;"/>
                        </a>
                        <h3><?=$tr['title']?></h3>
                        <div class="portfolio_description">
                            <div class="block">
                                <h3><?=$tr['price']?> USD</h3>
                                <p class="description">
                                    <?=$tr['content']?>
                                </p>
                                
                                
                                
                            </div>
                        </div>
                    </li>

                   <?php endforeach;?>
                   

                </ul>
            </div>
            <div class="row">
              
            </div>
        </div>
    </section>



<footer>
    <div class="social">
        <div class="social_icons">
            <a class="social-icons__sep" href="#"><i class="fa fa-twitter"></i></a>
            <a class="social-icons__sep" href="#"><i class="fa fa-facebook"></i></a>
            <a class="social-icons__sep" href="#"><i class="fa fa-pinterest"></i></a>
            <a class="social-icons__sep" href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-rss"></i></a>
        </div>  
        <img alt="" src="example/footer_bg.jpg">          
    </div>           
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
 

    <div class="preloader">
        <div class="preloaderimg"></div>
    </div>

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