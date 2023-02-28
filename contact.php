

<?php require_once "block/header.php";?>
<?php
if(isset($_POST["button"]))
{
  $success = addcl($_POST["title"],$_POST["phone"],$_POST["email"]);
}
?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <?php require_once "block/menu.php";?>
    <section class="contact_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header">Our location</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                </div>  
            </div>   
        </div>
    </section>



    <div id="middle" class="light_section">
        <div class="container">

           

            <div class="row">

              <div class="block widget_text col-sm-5 to_animate" data-animation="fadeInLeftBig">                   
                    <h2 class="block-header text-center">Contact Info</h2>
                    <div id="map" class="light_section"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, aspernatur, velit. Adipisci, animi, molestiae, neque voluptatum non voluptas atque aperiam nam sed quidem quae harum ipsum sit veritatis expedita. Laudantium.</p>
                    <p>
                        <strong>Address:</strong> Бишкек манаса 12<br> 
                        <strong>Phone: </strong>+996 705 56 56 56<br>
                        
                    </p>
                    
                </div>

                <div class="block col-sm-7 to_animate" data-animation="fadeInRightBig">
                    <h2 class="block-header text-center">Contact Form</h2>
                    <form name="tour" method="post" action="" style="margin-left: 399px;" id="main-contact-form">
           <div class="form-group">Ваше имя<br><input type="text" name="title"><br></div>
            <div class="form-group">Ваш номер телефон <br><input type="text" name="phone"><br></div>
              <div class="form-group">Ваш e-mail<br><input type="text" name="email"><br></div>
              
              <div class="form-group"><input type="submit" name="button" value="Отправить" class="btn btn-submit"></div> 

        </form>
                </div>
              
            </div>
        </div>
    </div>

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
                    &copy; Copyright 2014 - Travel Portal 
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

        <!-- Map Scripts -->

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            var lat;
            var lng;
            var map;

            //type your address after "address="
            jQuery.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=london, baker street, 221b&sensor=false', function(data) {
                lat = data.results[0].geometry.location.lat;
                lng = data.results[0].geometry.location.lng;
            }).complete(function(){
                dxmapLoadMap();
            });

            function attachSecretMessage(marker, message)
            {
                var infowindow = new google.maps.InfoWindow(
                    { content: message
                    });
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map,marker);
                });
            }

            window.dxmapLoadMap = function()
            {
                var center = new google.maps.LatLng(lat, lng);
                var settings = {
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    zoom: 16,
                    draggable: false,
                    scrollwheel: false,
                    center: center
                };
                map = new google.maps.Map(document.getElementById('map'), settings);

                var marker = new google.maps.Marker({
                    position: center,
                    title: 'Map title',
                    map: map
                });
                marker.setTitle('Map title'.toString());
            //type your map title and description here
            attachSecretMessage(marker, '<h3>Map title</h3>Map HTML description');
            }
        </script>


    </body>
</html>