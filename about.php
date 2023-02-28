<?php require_once "block/header.php";?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <?php require_once "block/menu.php";?>






    
<section class="">
  <div class="container text-center">
   
    <div class="row">
        <h2 class="block-header">О Нас</h2>
        <?php $about= get_about();?>
<?php foreach($about as $ab): ?><h4><?=$ab['about']?></p> <?php endforeach;?>
    </div>
   
  </div>
</section>

<section id="team" class="parallax color_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header">Our Team</h2>
                </div>
            </div>
            <div class="row to_animate_child_blocks">
             <?php $about= get_about();?>
<?php foreach($about as $ab): ?>
                <div class="block col-sm-6 col-md-3 to_animate" data-animation="fadeInUpBig">
                    <div class="thumbnail">
                        <img src="<?=$ab['image']?>" alt="team">
                        <div class="caption">
                            <h4><?=$ab['title']?></h4>
                            <p><?=$ab['dolj']?></p>

                        </div>
                        <p class="team-social">
                            <a class="socialico-facebook" href="#" title="Facebook">#</a>
                            <a class="socialico-twitter" href="#" title="Twitter">#</a>
                            <a class="socialico-dribble" href="#" title="LinkedIn">#</a>
                        </p>
                    </div>
                </div>
             <?php endforeach;?>  
            
        </div>
    </section>
    

    <section id="testimonials" class="grey_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">

                    <div id="carousel-testimonials-fullwidth" class="carousel slide widget_testimonials block">
                      
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-testimonials-fullwidth" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-testimonials-fullwidth" data-slide-to="1"></li>
                            <li data-target="#carousel-testimonials-fullwidth" data-slide-to="2"></li>
                        </ol>  
                        <div class="carousel-inner">
                            <div class="item active">
                                <h4 class="carousel-introtext">
                                    Lorem ipsum dolor sit amet eligendi optio cumque nihil impedit quo minus id quod maxime posmus omnis voluptas assumenda est, omnis dolor repellendus. 
                                </h4>
                                <p class="carousel-readmore">
                                    John Doe
                                </p>
                            </div>
                            <div class="item">
                                <h4 class="carousel-introtext">
                                    Lorem ipsum dolor sit amet eligendi optio cumque nihil impedit quo minus id quod maxime posmus omnis voluptas assumenda est, omnis dolor repellendus. 
                                </h4>
                                <p class="carousel-readmore">
                                    Catrin Jhonson
                                </p>
                            </div>
                            <div class="item">
                                <h4 class="carousel-introtext">
                                     Lorem ipsum dolor sit amet eligendi optio cumque nihil impedit quo minus id quod maxime posmus omnis voluptas assumenda est, omnis dolor repellendus. 
                                </h4>
                                <p class="carousel-readmore">
                                    Nataly Smith
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
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