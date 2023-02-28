<?php 
$tr_id = $_GET['tr_id'];
if (!is_numeric($tr_id)) exit();

require_once "block/header.php";
$tr=get_tour_id($tr_id);



?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

       <?php require_once "block/menu.php";?>
    

<section id="middle" class="light_section">
	<div class="container">
		<div class="row blog-single">
			
			<div class="col-sm-9">
				<div class="content-area" id="primary">
					<div role="main" class="site-content" id="content">
						<article class="post type-post">

							<header class="entry-header">								
		                           <div class="badgeBox">
			                  
			                            <div class="extra-wrap">
			                                <p style="    font-size: 29px;
    text-align: center;
    color: #cc0;
    background: #444;"><?=$tr['title']?></p>
			                                
			                            </div>
			                            
		                      	  </div>
								<!-- .entry-meta --> 
							</header>
								<div class="entry-thumbnail">
									<img alt="" src="<?=$tr['image']?>">
								</div>
							<!-- .entry-header -->

							<div class="entry-content">
								<p>
									<?=$tr['content']?>
								</p>
								
							</div>
							<!-- .entry-content -->
							
                             
							<!-- .entry-meta --> 
						</article>
						<!-- #post -->

						<div class="comments-area" id="comments">
							<h2 class="comments-title"></h2>
							<ol class="comment-list">
								
											<!-- .children --> 
										</li>
										<!-- #comment-## -->
									</ol>
									<!-- .children --> 
								</li>
								<!-- #comment-## -->
								<li class="comment byuser odd alt thread-odd thread-alt depth-1">
									
									<!-- .comment-body --> 
								</li>
								<!-- #comment-## -->
							</ol>
							<!-- .comment-list -->

							<div class="comment-respond" id="respond">
								<h3 class="comment-reply-title" id="reply-title"></h3>
								
							</div>
							<!-- #respond --> 

						</div>
						<!-- #comments --> 

					</div>
					<!-- #content --> 
				</div>

			</div>

			<!-- Sidebar -->

			<aside class="col-sm-3">

			


				



				

				<div class="block widget_news">
					<h3>Другие туры</h3>
					<ul>
					<?php $tour= get_tour();?>
<?php foreach($tour as $tr): ?>
						<li class="item">
							<span class="news_introimg">
								<a href="blog-single.php?tr_id=<?=$tr['id']?>">
									<img alt="" src="<?=$tr['image']?>">
								</a>
							</span>
							<div class="news_right">
								<h5> 
									<a href="blog-single.php?tr_id=<?=$tr['id']?>"><?=$tr['title']?></a>
								</h5>
								<p><?=$tr['price']?> USD</p>
							</div>
						</li>

						<?php endforeach;?>
					</ul>
				</div>


			</aside><!-- eof sidebar -->



		</div></div></section>


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
                    &copy; Copyright 2017 - Travel Portal 
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


		<!--Social Buttons Scripts-->

		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "ur-6a7e320d-37d8-511-633d-4264e3ae8c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    </body>
</html>